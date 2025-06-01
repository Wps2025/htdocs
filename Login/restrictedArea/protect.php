<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
// Verifica se a sessão já foi iniciada
if (!isset($_SESSION)) {
    session_start();
}
if (session_status() === PHP_SESSION_NONE) {
    if (!session_start()) {
        exit("Erro ao iniciar a sessão. Por favor, tente novamente mais tarde.");
    }
}
if (!isset($_SESSION['user_id'])) {

    // 1. Remover todas as variáveis de sessão
    session_unset();

    session_destroy();
    header('Location: /structure/error.php?restricted');
    exit;
}