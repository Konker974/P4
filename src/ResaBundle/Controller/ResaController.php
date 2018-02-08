<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ResaBundle\Entity\Reservation;
use ResaBundle\Form\ReservationType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ResaController extends Controller
{
    public function formAction()
    {
        $reservation = new Reservation();

        $form=$this->get('form.factory')->create(ReservationType::class, $reservation);


        return $this->render('ResaBundle:Default:form.html.twig',array('form'=>$form->createView()));
    }
}
