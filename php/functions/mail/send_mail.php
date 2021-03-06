<?php

/**
* php/functions/send_mail.php
*
* Fonction utilisée pour l'envoi de mail
*
* @param string $from L'adresse mail de l'expéditeur
*
* @param string $to L'adresse mail du destinataire
*
* @param string $subject Le sujet du message
*
* @param string $mess Le message a envoyer
*
* @return int $envoi Le succés de l'envoi. 0 pour non, 1 pour oui
*/

function send_mail($from,$to,$subject,$mess)
{
     $envoi = 0;
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

     $message =
     '
     <!DOCTYPE HTML>
          <html>
               <head></head>
               <body>
                    <p>
                         '.$mess.'
                    </p>
               </body>
          </html>
     ';
     if(mail($to,$subject,$message,$headers))
     {
          $envoi = 1;
     }
     return $envoi;
}
