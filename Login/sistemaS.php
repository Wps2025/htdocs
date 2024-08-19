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
    padding: 10px;
    left: 20px;
    background-image: linear-gradient(50deg, yellow, red);
    border-radius: 10px;
    }

    fieldset{
    border: 2px solid rgba(206, 81, 23, 0.952);
    border-radius: 5px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 50px;
    border-radius: 15px;
    }
    a{
        color: black;
        text-decoration: none;
        padding: 50px;
        font-size: 30px;
    }
    .d-flex{
    text-align: right;
    padding: 20px;
    top: 50%;
    left: 50%;
    }
    
    </style>
</head>
<body>
    <h1>Acessou o sistema </h1>
    <fieldset>
        <div>
            <a href="theory.php">Teórica</a>
            <a href="practical.php">Prático</a>
                </div>
                <br>
    </fieldset>
        <div class="d-flex">
            <a href="sair.php" >Sair</a>
        </div>
</body>
</html>