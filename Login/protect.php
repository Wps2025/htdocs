<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("não pode acessa.<p><a href=\"login.php\">Entrar</</p>");
}
?>