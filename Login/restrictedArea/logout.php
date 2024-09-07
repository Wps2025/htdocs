<?php
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();

header('Location: /projeto_Cadidatos/projeto_Cadidatos/Login/login.php');
exit;
