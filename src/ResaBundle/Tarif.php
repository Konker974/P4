<?php

namespace ResaBundle;

class Tarif
{
  private $tarifs;

  public function __construct($tarifs)
  {
    $this->tarifs= $tarifs;
  }

  public function applyRate(\DateTime $dateNaissance, \DateTime $dateVisite, $reduit=0)
  {
    $diff=$dateNaissance->diff($dateVisite);

    if ($reduit) {

      if ($diff->y < 4 ){
      return $this->tarifs["gratuit"];
      }
      else if ($diff->y >= 4 && $diff->y < 12 ){
        return $this->tarifs["enfant"];
      }
      else {
        return $this->tarifs["reduit"];
      }
    }
    else {

      if ($diff->y >= 12 && $diff->y < 60 ){
        return $this->tarifs["normal"];
      }
      else if ($diff->y >= 60 ){
        return $this->tarifs["senior"];
      }
      else if ($diff->y >= 4 && $diff->y < 12 ){
        return $this->tarifs["enfant"];
      }
      else if ($diff->y < 4 ){
        return $this->tarifs["gratuit"];
      }
    }


  }
}
