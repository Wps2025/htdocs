<?php

///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
// Conexão com o banco de dados
$dbhost = 'sql111.byethost24.com';
$dbUsername = 'b24_38775285';
$dbPassword = 'W39.16.19.76.l$';
$dbName = 'b24_38775285_candidatos';

$conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

// Verificar se a conexão falhou
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Iniciar a sessão
session_start();

// Verificar se a variável de sessão está definida
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = uniqid(); // Atribuir um ID único ao usuário
}

// Exibir mensagem com o ID do usuário
if (isset($_SESSION['user_id'])) {
    //echo "Sessão iniciada para o usuário: " . $_SESSION['user_id'];
} else {
    echo "Nenhuma sessão iniciada.";
}

?>
