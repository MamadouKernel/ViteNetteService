<?php
/* 
//error_reporting(0); // uncomment this line for production
//Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'server/vendor/autoload.php';
require 'server/config.php';
 */
if (isset($_POST['envoyer'])) {

    extract($_POST);

    try {

        $destinataire = "vitenetteservice01@gmail.com"; // Adresse destinateur
        $emeteur = $email; // Adresse emeteur
        $no_reply = $email; // Adresse de retour
        $sujet ="message";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'X-Priority : 1' . "\r\n"; // Niveau de priorité : urgent
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
        $headers .= "From: $name <$emeteur>" . "\r\n" . "Reply-To:$no_reply" . "\r\n";
        $messages = $message;

        if (mail($destinataire, $sujet, $messages, $headers)) {
            sleep(1);
            $success = "Votre message a bien été envoyé. ViteNetteService vous remercie!";
            unset($_POST);//vide le formulaire
        } else {
            $echec = "Désolé votre message n'a pas été envoyé Veuillez réessayer.";
        }
    } catch (Exception $e) {
        $echec = "Désolé votre message n'a pas été envoyé Veuillez réessayer.";
    }
        
}