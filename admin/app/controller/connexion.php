<?php
if (isset($_SESSION['Admin'])) {
    header('location:http://admin.vitenetteservices.com/dashboard/');
}

/**
 * Connexion
 *
 */


if (isset($_POST['valider'])) {
    extract($_POST);
    if ($admin->__login_user($login, $pwd)) {
        /** @var TYPE_NAME $success */
        $success='Connexion réussie ! le système va vous rediriger !....';?>
        <script>
            setTimeout(function () {
                window.location.href='http://admin.vitenetteservices.com/dashboard/';
            }, 2000)
        </script>
   <?php }else{
        /** @var TYPE_NAME $error */
        $error='Echec Vos données d\'ouverture de session sont incorrectes ! Réessayer SVP !';

    }
}





