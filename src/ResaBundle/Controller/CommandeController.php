<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ResaBundle\Entity\Reservation;
use ResaBundle\Entity\Billet;
use ResaBundle\Form\ReservationType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CommandeController extends Controller
{
    public function commandeAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $id = $request->getSession()->get('command_id');
      $reservation = $em->getRepository('ResaBundle:Reservation')->find($id);
      foreach ($reservation->getBillets() as $billet) {
        $billet->setDateVisite(date_format($billet->getDateVisite(), 'Y-m-d'));
      }

      return $this->render('ResaBundle:Default:commande.html.twig', array('reservation'=>$reservation));
    }

    public function paymentAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $id = $request->getSession()->get('command_id');
      $reservation = $em->getRepository('ResaBundle:Reservation')->find($id);
      if ($reservation->getIsPaid()) {
        return new Response("reservation dejà payée");
      }
      else {
        try {
          // Use Stripe's library to make requests...
          \Stripe\Stripe::setApiKey("sk_test_XT9dGqnKGuhRt4WxaZzNSO0r");

            // Token is created using Checkout or Elements!
            // Get the payment token ID submitted by the form:
          $token = $_POST['stripeToken'];

            // Charge the user's card:
          $charge = \Stripe\Charge::create(array(
              "amount" => ($reservation->getPrixTotal()*100),
              "currency" => "eur",
              "description" => "Example charge",
              "source" => "$token",
            ));



        } catch(\Stripe\Error\Card $e) {
          // Since it's a decline, \Stripe\Error\Card will be caught
          $body = $e->getJsonBody();
          $err  = $body['error'];

          print('Status is:' . $e->getHttpStatus() . "\n");
          print('Type is:' . $err['type'] . "\n");
          print('Code is:' . $err['code'] . "\n");
          print('Message is:' . $err['message'] . "\n");

          return new Response("erreur de paiement, merci de reconouveller l'opération");
        }catch (\Stripe\Error\RateLimit $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Too many requests made to the API too quickly
        } catch (\Stripe\Error\InvalidRequest $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Invalid parameters were supplied to Stripe's API
        } catch (\Stripe\Error\Authentication $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Authentication with Stripe's API failed
          // (maybe you changed API keys recently)
        } catch (\Stripe\Error\ApiConnection $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Network communication with Stripe failed
        } catch (\Stripe\Error\Base $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Display a very generic error to the user, and maybe send
          // yourself an email
        } catch (Exception $e) {
          return new Response("erreur de paiement, merci de reconouveller l'opération");
          // Something else happened, completely unrelated to Stripe
        }
        if ($charge->paid) {
          $reservation->setIsPaid(true);
        }
        $em->persist($reservation);
        $em->flush();
        return $this->render('ResaBundle:Default:payment.html.twig');

      }



    }
}
