<?php
    session_start();
    session_destroy();

if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: practical.php');
    header('Location: login.php');
    exit();
    
}

?>