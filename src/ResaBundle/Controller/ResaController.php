<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ResaBundle\Entity\Reservation;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ResaController extends Controller
{
    public function formAction()
    {
        $reservation = new Reservation();

        $formBuilder=$this->get('form.factory')->createBuilder(FormType::class, $reservation);
        $formBuilder->add('date', DateType::class);
        $form=$formBuilder->getForm();


        return $this->render('ResaBundle:Default:form.html.twig',array('form'=>$form->createView()));
    }
}
