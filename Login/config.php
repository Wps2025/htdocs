<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cadastro';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}   //TESTE DE CONEXÃO MYSQLI
    //else
    //{
    //    echo "Conexão efetuada com sucesso!";
    //}
?>
