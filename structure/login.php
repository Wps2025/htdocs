<!--
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
-->
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel = "stylesheet" href="./css/login.css">
    </head>
    <body>
        <div class="box">
            <form action= "testLogin.php" method="POST">
                <h3>JÁ SOU CADASTRADO!</h3>
                    <br>
                    <input type="text" name="email" placeholder="E-mail">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>
                    <input class="inputSubmit" type="submit" name="submit_button" value="Login">
                    <br><br>
                    <a href="password">Não lembro minha senha</a>
                    <br><br><br><br>
                    <a href="formulario">Cadastre-se</a>
            </form>
        </div>
    </body>
</html>