<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Conexão com o banco de dados
    include("config.php");

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . htmlspecialchars($conn->connect_error));
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verifica se a senha está correta
            if (password_verify($senha, $row['senha'])) {
                // Se a senha estiver correta, redireciona para o sistema
                header('Location: /htdocs/login/system/sistemaS.php');
                exit();
            } else {
                // Se a senha estiver incorreta, exibe a mensagem de erro
                header('Location: /htdocs/index.php?erro=password_email');
                exit();
            }
        } else {
            // Se o cadastro não for encontrado, exibe a mensagem de erro
            header('Location: /htdocs/structure/error.php?erro=use_not_found');
            exit();
        }
        // Fecha a conexão
        $stmt->close();
    } else {
        die("Erro na preparação da consulta: " . htmlspecialchars($conn->error));
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="./css/testLogin.css">

</head>
<body>
    <div>
    <?php
    if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
        // Bloqueia o acesso direto
        http_response_code(403);
        echo "Não será possível acessar o sistema!<br>Bloqueia o acesso direto<br>Não tem uma conta?<br><br>";
        echo "<a href='/htdocs/structure/formulario.php'>Cadastre-se</a><br>";
        echo "<br><a href='/htdocs/index.php'>Login</a>";
        exit();
    }
    ?>
    </div>
</body>
</html>

