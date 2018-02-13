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
            $billets=$reservation->getBillets();

            foreach ($billets as $billet) {
              $billet->setReservation($reservation);
              dump($billet);
            }


            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            //return $this->redirectToRoute('resa_commandpage', array('id' => $reservation->getId()));
          }
        }

        return $this->render('ResaBundle:Default:form.html.twig',array('form'=>$form->createView()));
    }
}
