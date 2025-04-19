<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
session_destroy();
header('Location: /htdocs/index.php');
exit;

?>
