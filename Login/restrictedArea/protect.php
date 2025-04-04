<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    exit("Não será possível acessar o sistema!
            Cadastre-se no formulário ou acesse o login novamente.
            <p><a href=\"../structure/login.php\">Entrar aqui</a></p>");
}
?>