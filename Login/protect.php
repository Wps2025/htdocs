<?php
if(isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['email'], $_SESSION['senha'])){
    die("não pode acessa.<p><a href=\"login.php\">Entrar</</p>");
}
?>