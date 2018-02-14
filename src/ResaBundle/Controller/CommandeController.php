<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ResaBundle\Entity\Reservation;
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

      return $this->render('ResaBundle:Default:commande.html.twig', array('reservation'=>$reservation));
    }
}
