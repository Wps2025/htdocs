<?php
session_start();
session_destroy();; ?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do candidato</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, yellow);
            color: black;
        }

        a {
            color: black;
            text-decoration: none;
            background-image: linear-gradient(40deg, yellow, red);
            padding: 15px;
            border-radius: 15px;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
            border-bottom: 5px solid black;
        }

        a1:hover {
            color: red;
            cursor: pointer;
        }

        div {
            background-image: linear-gradient(45deg, yellow, red);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 15px;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
        }

        .inputSubmit {
            background-image: linear-gradient(45deg, yellow, red);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 15px;
            color: black;
            font-size: 15px;
            cursor: pointer;
        }

        .inputSubmit:hover {
            background-image: linear-gradient(45deg, red, yellow);
        }
    </style>
</head>

<body>
    <a href="home.php">HOME</a>
    <div class="box">
        <form action="testLogin.php" method="POST">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br>
            <br>
            <a1 href="">Esqueci minha senha</a1>
            <br>
            <br>
            <br>
            <a href="./form/formulario.html">Cadastre-se</a>
            <?php
            if (isset($_GET['erro'])) {
                echo "<p style='color:red;font:size20px;px;text-align:center;'
                    >Senha ou E-mail incorreta!</p>";
            }
            ?>
        </form>
    </div>
</body>

</html>