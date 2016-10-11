<?php

/**
* Cette fonction épure un lien en faisant appel à la fonction pure_charcters
* et en la convertissant en minuscules
*
* @param string $lien Le lien a épurer
*
* @return string $lien Le lien épuré
*/

function pure_link($lien)
{
  $lien = trim(pure_characters($lien));
  $lien = mb_strtolower($lien,'UTF-8');
  $lien = str_replace(' ','-',$lien);
  return $lien;
}
