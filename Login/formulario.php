<?php


session_start();

if (isset($_POST['submit'])) {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Senha: ' . $_POST['senha']);

    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha= password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha)
    VALUES ('$nome', '$email', '$senha')");

    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do candidato/cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            background-image: linear-gradient(45deg, red, yellow);
        }

        .box {
            background-image: linear-gradient(45deg, yellow, red);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 15px;
        }

        a {
            color: black;
            text-decoration: none;
            background-image: linear-gradient(40deg, yellow, red);
            padding: 15px;
            border-radius: 13px;
            cursor: pointer;
            border-bottom: 5px solid black;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 90%;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: black;
            font-size: 15px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 15px;
            padding: 5px;

        }

        fieldset {
            border: 2px solid rgba(206, 81, 23, 0.952);
            border-radius: 5px;
        }

        legend {
            border: 2px solid rgba(206, 81, 23, 0.952);
            padding: 5px;
            text-align: center;
            border-radius: 5px;
            color: black;
        }

        #submit {
            background-image: linear-gradient(50deg, red, yellow);
            border-radius: 5px;
            cursor: pointer;
            border: none;
            padding: 15px;
            width: 100%;
            font-size: 15px;
        }

        #submit:hover {
            background-image: linear-gradient(50deg, yellow, red);
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário do candidato</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Digite seu e-mail</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Criar uma Senha</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
    </div>
    <br>
    </fieldset>
    </form>
    </div>
    <a href="login.php">Volta</a>

</body>

</html>