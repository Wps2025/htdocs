<?php
include '../restrictedArea/protect.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | logado </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(80deg, red, yellow);
            color: black;
        }

        h1 {
            position: absolute;
            padding: 10px;
            left: 20px;

        }

        fieldset {
            border: 2px solid rgba(206, 81, 23, 0.952);
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
        }

        a {
            color: black;
            text-decoration: none;
            padding: 50px;
            font-size: 30px;
        }

        .d-flex {
            text-align: right;
            padding: 20px;
            top: 50%;
            left: 50%;
        }
    </style>
</head>

<body>
    <h1>Sejam bem-vindos!<br><br>
        <br><br>Login realizado com sucesso!
    </h1>

    <fieldset>
        <div>
            <a href="theory.php">Aulas Teóricas</a>
            <a href="practical.php">Aulas Práticas</a>
        </div>
        <br>
    </fieldset>

    <div class="d-flex">
        <a href="../restrictedArea/logout.php">Sair</a>
    </div>

</body>

</html>