<?php

/**
* php/functions/convert_months.php
*
* Cette fonction convertit les mois chiffrés en mois lettrés
*
* @param int $month Le mois à convertir
*
*
* @return string $month Le mois en lettres
*/

function convert_months($month)
{
  $month = intval($month);
  $taille = strlen($month);
  if($taille == 1)
  {
    $in = array('1','2','3','4','5','6','7','8','9');
    $out = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre');
  }
  else
  {
    $in = array('10','11','12');
    $out = array('Octobre','Novembre','Décembre');
  }
  $month = str_replace($in,$out,$month);
  return $month;
}
