<?php
if (session_start()=== NULL){
    session_start();
    return true;
};

require ('core/DATABASE.class.php');
$db = new DATABASE();


include ('core/requete.class.php');
$kernel = new vns($db);
?>