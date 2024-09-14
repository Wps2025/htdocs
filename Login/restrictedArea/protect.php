<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    die("Não vai ser possivel acessa o sistema!
        Cadastre-se o formulário / Acessa login novamente.
        <p><a href=\" ../structure/login.php\">Entra aqui</</p>");
}
?>