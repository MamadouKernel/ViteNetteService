<?php
if (session_start() === NULL) {
    session_start();
    return true;
}
/*
 * Copyright (c) 2022,
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

//error_reporting(0); // uncomment this line for production
date_default_timezone_set('UTC');

/**
 * Home Directory
 *
 */
$dir = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;
define("ROOT_DIR", $dir, FALSE);


/**
 * Connexion db
 * Database class
 * @name $db
 *
 */
include ROOT_DIR . 'core/Database.class.php';
$db = new \Core\Database();


/**
 * require once public class
 *
 * @name $ function
 */


include(ROOT_DIR . 'app/class/Admin.class.php');
$admin = new Admin($db);

if(isset($_GET['logout']) and $_GET['logout'] == true){
    $error = "Vos êtes bien déconnecté!";
    session_destroy();

}



