<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['login']);
        print_r($_POST['senha']);
    }

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do candidato/cadastro</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <a href="login.html">Volta</a>
    <div class="box">
        <form action="formulario-php" method="POST">
            <fieldset>
                <legend><b>Formulário do candidato</b></legend>
                <br><br>
                <div class= "inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class= "labelInput">Nome Completo</label>
                        </div>
                        <br>
                    <div class="inputBox">
                        <input type="email" name="login" id="login" class="inputUser" required>
                            <label for="login" class= "labelInput">Digite seu e-mail</label>
                            </div>
                            <br>
                    <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class= "labelInput">Criar uma Senha</label>
                </div>
                <br>
                <input type="submit" nome="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>