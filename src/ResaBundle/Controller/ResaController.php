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
use ResaBundle\Tarif\Tarif;


class ResaController extends Controller
{
    public function formAction(Request $request)
    {
        $reservation = new Reservation();

        $form=$this->get('form.factory')->create(ReservationType::class, $reservation);

        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
          $form->handleRequest($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
            // On enregistre notre objet $advert dans la base de données, par exemple
            $reservation->setDate(new \DateTime());
            $reservation->setIsPaid(false);
            $reservation->setNumSerieResa(date('U'));
            $billets=$reservation->getBillets();

            foreach ($billets as $billet) {
              $billet->setReservation($reservation);
              $date_format=new \DateTime($billet->getDateNaissance());
              $billet->setDateNaissance($date_format);
              $date_format=new \DateTime($billet->getDateVisite());
              $billet->setDateVisite($date_format);
            }


            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            $request->getSession()->set('command_id', $reservation->getId());
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('resa_commandpage');
          }
        }

        return $this->render('ResaBundle:Default:form.html.twig',array('form'=>$form->createView()));
    }

    public function scriptAction()
    {
      $response=new Response();
      if (isset($_GET["dateVisite"]) && isset($_GET["dateNaissance"]) && isset($_GET["id"]) && isset($_GET["reduction"])) {

        if ($_GET["dateVisite"]!=NULL && $_GET["dateNaissance"]!=NULL && $_GET["id"]!=NULL && $_GET["reduction"]!=NULL) {

          $reduction=$_GET["reduction"];
          $selecteur=$_GET["id"];
          $tarif=$this->container->get('resa.tarif');

          $dateNaissance=new \DateTime($_GET["dateNaissance"]);
          $dateVisite=new \DateTime($_GET["dateVisite"]);

          $totalBillet=$tarif->applyRate($dateNaissance, $dateVisite, $reduction);

          $retour=array('selecteur'=>$selecteur, 'totalBillet'=>$totalBillet);


          return $response->setContent(json_encode($retour));
        }
        else {
          return $response->setContent("il manque une date");
        }

      }

      else {
        $response=new Response();
        return $response->setContent("nop");
      }


    }
}
