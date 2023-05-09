<?php
include ('parametres/config/conf.php');
$kernel = new vns($db);
if (isset($_POST['achat'])) {
    extract($_POST);
    $verif_nump = $kernel->_trie($nump);
    if ($verif_nump != 0) {
        $echec = 'Désolez cette pièce est déjà enregistrer';
    } else {
        $date = date("d/m/Y");
        
        $ins_com = $kernel->_inserer($np, $tpi, $nump, $tele, $mail, $dnai, $date);

        if ($ins_com == true) {
            $success = "Commande validé";
        } else {
            $echec = "Commande non validé";
        }
    }
}
include('views/booking.view.php');?>