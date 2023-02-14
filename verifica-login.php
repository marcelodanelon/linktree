<?php
    session_start();
    if((!isset ($_SESSION['usuario']) == true) && (!isset ($_SESSION['senha']) == true))
    {
        header("location: login.php");
        exit();
    }
?>