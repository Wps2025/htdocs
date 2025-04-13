<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
include_once '../restrictedArea/protect.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | logado </title>
    <link rel = "stylesheet" href="../system/css/sistemaS.css">
</head>
<body>
    <h1>É um prazer tê-los aqui, bora estudar?</h1>
    <fieldset>
        <div>
        <a href="practical.php">Prática</a>
        <a href="theory.php">Teórica</a>
        </div>
        <br>
    </fieldset>
    <form action="../restrictedArea/logout.php" method="post">
  <button type="submit">SAIR</button>
</form>
</body>
</html>