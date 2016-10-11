<?php

/**
* Fonction vérifiant la validité d'une adresse mail
*
* @uses Pays::construct Pour la liste des extension par pays
*
* @param string $email L'email renseigné
*
* @return int $ok La validation de l'email. 0 pour non, 1 pour oui
*/

function verif_email($email)
{
  GLOBAL $countries;
  $ok = 0;
  //vérification de la présence d'un @
  if(strpos($email,'@'))
  {
    $parts = explode('@',$email);
    {
      //avant l'@
      $before = $parts[0];
      //apres l'@
      $after = $parts[1];
      //apres l'@, on découpe la chaine a chaque point
      $domaine = explode('.',$after);
      //on défini la position du dernier point
      $position = count($domaine)-1;
      $domaine = $domaine[$position];
      if($domaine == 'com')
      {
        $ok = 1;
      }
      //on parcours le tableau des pays et verifie si l'extension correspond
      foreach($pays->list as $pays)
      {
        if($pays['extension'] == $domaine)
        {
          $ok = 1;
        }
      }
    }
  }
  return $ok;
}
