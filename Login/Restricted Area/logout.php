<?php
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
header('Location: projeto_Cadastro/projeto_Casdatro/Login/Loginn/login.html');
exit;
