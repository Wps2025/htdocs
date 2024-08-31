<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cadastro';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);
    
    include_once('config.php');
    $senha= $_POST['senha'];
    $senha_criptor = password_hash($senha, PASSWORD_DEFAULT);

?>

