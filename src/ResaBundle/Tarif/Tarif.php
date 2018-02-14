<?php

namespace ResaBundle\Tarif;

class Tarif
{
  private $tarifs;

  public function __construct($tarifs)
  {
    $this->tarifs= $tarifs;
  }

  public function applyRate(\DateTime $dateNaissance, \DateTime $dateVisite)
  {
    $diff=$dateNaissance->diff($dateVisite);
    return $diff->y;
  }
}
