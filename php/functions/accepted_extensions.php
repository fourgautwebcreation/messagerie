<?php

/**
* Cette fonction est utilisée afin de valider l'extension d'un fichier fourni
*
* @param string $extension L'extension a valider
*
* @return int $ok 0 pour non valide, 1 pour valide
*/

function accepted_extensions($extension)
{
  $accepted = array('jpg','jpeg','gif','png');
  $ok = 0;
  foreach($accepted as $a)
  {
    if($a == $extension)
    {
      $ok = 1;
    }
  }
  return $ok;
}
