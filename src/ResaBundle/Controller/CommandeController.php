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

    public function paymentAction()
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_XT9dGqnKGuhRt4WxaZzNSO0r");

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        // Charge the user's card:
        $charge = \Stripe\Charge::create(array(
          "amount" => 999,
          "currency" => "eur",
          "description" => "Example charge",
          "source" => $token,
        ));
        return $this->render('ResaBundle:Default:payment.html.twig');

    }
}
