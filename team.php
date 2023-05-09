<?php
include ('parametres/config/conf.php');
if (isset($_POST['rechager'])) {
    extract($_POST);
    $uploads_dir = 'assets/img_preuve';
    $fichie = $_FILES['fichie']['name'];
    $tmp_name = $_FILES["fichie"]["tmp_name"];
    //var_dump($fichie_tmp);
    $date = date("d/m/Y");
    $ins_com = $kernel->_inser_rech($numc, $pn, $ktrech, $montant, $ope, $fichie,$date);
    
    if ($ins_com == true) {
        $success = "Demande de réchargement validé";
        move_uploaded_file($tmp_name, "$uploads_dir/$fichie");
    } else {
        $echec = "Demande de réchargement non validé";
    }
}
include('views/team.view.php');?>