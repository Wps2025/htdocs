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
        <link rel = "stylesheet" href="./structure/css/index.css">
    </head>
    <body>
        <div class="box">
            <form action= "/htdocs/structure/testLogin.php" method="POST">
                <h3>JÁ SOU CADASTRADO!</h3>
                    <br>
                    <input type="text" name="email" placeholder="E-mail">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>
                    <input class="inputSubmit" type="submit" name="submit_button" value="Login">
                    <br><br>
                    <a href="/htdocs/structure/password.php">Não lembro minha senha</a>
                    <br><br><br><br>
                    <a href="/htdocs/structure/formulario.php">Cadastre-se</a>
            </form>
        </div>
    </body>
</html>