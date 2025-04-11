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
    echo nl2br(htmlspecialchars("Não será possível acessar o sistema! Cadastre-se no formulário ou acesse o login novamente!"));
    echo "<br><a>Não tem uma conta? </a><a href='/projeto_Candidatos/structure/formulario.php'>Cadastre-se</a>";
    echo "<a> ou </a><a href='/projeto_Candidatos/structure/login.php'>Login</a>";
    exit();

}