<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
session_destroy();
header('Location: /projeto_Candidatos/structure/home.php');
exit;

?>
