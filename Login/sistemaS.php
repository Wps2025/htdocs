<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado= $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | logado </title>
    <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, red, yellow);
    color: black;
    }

    h1{
    position: absolute;
    padding: 20px;
    background-image: linear-gradient(50deg, yellow, red);
    padding: 20px;
    border-radius: 15px;
    }

    div{
    text-decoration: none;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    a{
        color: black;
        text-decoration: none;
        font-size: 50px;
        padding: 20px;
    }
    
    </style>
</head>
<body>
    <h1>Acessou o sistema </h1>
    <div>
        <a href="theory.php">Teórica</a>
        <a href = "practical.php">Prático</a>
    </div>
</body>
</html>