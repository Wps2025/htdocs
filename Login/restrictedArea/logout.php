<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
// Inicia a sessão SE ela ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }

    // 1. Remover todas as variáveis de sessão
    session_unset();

    // 2. Destruir a sessão
    session_destroy();

    // 3. Invalidar o cookie de sessão
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
        }

        // 4. Redirecionar o usuário para a página inicial ou de login
        header('Location: /index.php'); // Ajuste o caminho conforme necessário
        exit();
        ?>