<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////

if (!isset($_SESSION)) {
    session_start();
}
session_destroy();

header('Location: /projeto_Cadidatos/Login/structure/login.php');
exit;
?>