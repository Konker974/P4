<?php

namespace ResaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ResaBundle\Entity\Reservation;
use ResaBundle\Form\ReservationType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CommandeController extends Controller
{
    public function commandeAction()
    {
      return $this->render('ResaBundle:Default:commande.html.twig');
    }
}
