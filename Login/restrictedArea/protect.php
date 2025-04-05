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
    session_destroy();
echo htmlspecialchars("Não será possível acessar o sistema!
            Cadastre-se no formulário ou acesse o login novamente!");
    header("Location: /projeto_Cadidatos/Login/structure/home.php");
exit();
}