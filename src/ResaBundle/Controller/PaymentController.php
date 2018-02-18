<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ResaBundle\Entity\Reservation;
use ResaBundle\Entity\Billet;

class PaymentController extends Controller
{
    public function paymentAction(Request $request)
    {
      //$em = $this->getDoctrine()->getManager();
      //$id = $request->getSession()->get('command_id');
      //$reservation = $em->getRepository('ResaBundle:Reservation')->find($id);

      return $this->render('ResaBundle:Default:payment.html.twig');
    }
}
