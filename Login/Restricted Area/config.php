<?php
// Conexão com o banco de dados
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-cadastro';

$conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

// Iniciar a sessão
session_start();

$_SESSION['user_id'] = "user_id";

// Verificar se a variável de sessão está definida
if(isset($_SESSION['user_id'])){

    echo"Sessão iniciada para o usuário: " . $_SESSION['user_id'];

} else{

    echo"Nenhuma sessão iniciada.";
}

?>