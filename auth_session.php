<?php
    session_start();
    if(!isset($_SESSION['teamname'])){
        header("location: /KÜTV_Weboldal/login.php");
        exit();
    }
?>