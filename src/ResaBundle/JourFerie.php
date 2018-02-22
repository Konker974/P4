<?php

namespace ResaBundle;

class JourFerie
{

  /******************************************************************************/
  /*                                                                            */
  /*                       __        ____                                       */
  /*                 ___  / /  ___  / __/__  __ _____________ ___               */
  /*                / _ \/ _ \/ _ \_\ \/ _ \/ // / __/ __/ -_|_-<               */
  /*               / .__/_//_/ .__/___/\___/\_,_/_/  \__/\__/___/               */
  /*              /_/       /_/                                                 */
  /*                                                                            */
  /*                                                                            */
  /******************************************************************************/
  /*                                                                            */
  /* Titre          : Déterminer rapidement si un jour est férié (fêtes...      */
  /*                                                                            */
  /* URL            : http://www.phpsources.org/scripts382-PHP.htm              */
  /* Auteur         : Olravet                                                   */
  /* Date édition   : 05 Mai 2008                                               */
  /* Website auteur : http://olravet.fr/                                        */
  /*                                                                            */
  /******************************************************************************/

  public function jour_ferie($timestamp)
  {
    $jour = date("d", $timestamp);
    $mois = date("m", $timestamp);
    $annee = date("Y", $timestamp);
    $EstFerie = '';
    // dates fériées fixes
    if($jour == 1 && $mois == 1) $EstFerie = 1; // 1er janvier
    if($jour == 1 && $mois == 5) $EstFerie = 1; // 1er mai
    if($jour == 8 && $mois == 5) $EstFerie = 1; // 8 mai
    if($jour == 14 && $mois == 7) $EstFerie = 1; // 14 juillet
    if($jour == 15 && $mois == 8) $EstFerie = 1; // 15 aout
    if($jour == 1 && $mois == 11) $EstFerie = 1; // 1 novembre
    if($jour == 11 && $mois == 11) $EstFerie = 1; // 11 novembre
    if($jour == 25 && $mois == 12) $EstFerie = 1; // 25 décembre
    // fetes religieuses mobiles
    $pak = easter_date($annee);
    $jp = date("d", $pak);
    $mp = date("m", $pak);
    if($jp == $jour && $mp == $mois){ $EstFerie = 1;} // Pâques
    $lpk = mktime(date("H", $pak), date("i", $pak), date("s", $pak), date("m", $pak)
    , date("d", $pak) +1, date("Y", $pak) );
    $jp = date("d", $lpk);
    $mp = date("m", $lpk);
    if($jp == $jour && $mp == $mois){ $EstFerie = 1; }// Lundi de Pâques
    $asc = mktime(date("H", $pak), date("i", $pak), date("s", $pak), date("m", $pak)
    , date("d", $pak) + 39, date("Y", $pak) );
    $jp = date("d", $asc);
    $mp = date("m", $asc);
    if($jp == $jour && $mp == $mois){ $EstFerie = 1;}//ascension
    $pe = mktime(date("H", $pak), date("i", $pak), date("s", $pak), date("m", $pak),
    date("d", $pak) + 49, date("Y", $pak) );
    $jp = date("d", $pe);
    $mp = date("m", $pe);
    if($jp == $jour && $mp == $mois) {$EstFerie = 1;}// Pentecôte
    $lp = mktime(date("H", $asc), date("i", $pak), date("s", $pak), date("m", $pak),
    date("d", $pak) + 50, date("Y", $pak) );
    $jp = date("d", $lp);
    $mp = date("m", $lp);
    if($jp == $jour && $mp == $mois) {$EstFerie = 1;}// lundi Pentecôte
    // Samedis et dimanches
    $jour_sem = jddayofweek(unixtojd($timestamp));
    if($jour_sem == 0 || $jour_sem == 2) $EstFerie = 1;


    //on ajoute ici le test pour connaitre si la date de visite est dépassée ou pas
    $hier=strtotime("-1 days");
    if ($timestamp==time()) {
      $EstFerie = '';
    }
    if ($timestamp<$hier) {
      $EstFerie = 1;
    }

    return $EstFerie;
  }



}
