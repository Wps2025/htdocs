<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Conexão com o banco de dados
    include("config.php");
    //Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        header('Location: login.php');
        exit();
    } else {
        echo "Erro: " . $stmt->error;
        $stmt->close();
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login do candidato/cadastro</title>
        <link rel = "stylesheet" href="./css/formulario.css">
        </head>
        <body>
        <div class="box">
            <form method="POST" action="formulario">
            <fieldset>
                <legend><b>AINDA NÃO ME CADASTREI </b></legend>
                <br><br>
                <div class="inputBox"><br>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox"><br>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Digite seu e-mail</label>
                </div>
                <br>
                <div class="inputBox"><br>
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
    <a href="login" class="button">VOLTA</a>
    </body>
</html>