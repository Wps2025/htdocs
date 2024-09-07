<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    die("Não vai ser possivel acessa o sistema!
        Cadastre-se no formulario / Acessa login novamente.
        <p><a href=\" login.php\">Entra aqui</</p>");
}
