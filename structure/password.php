<?php
    include_once 'config.php';
    // Ensure $conn is initialized as a valid database connection
    if (!isset($conn) || !$conn) {
        die("Erro: Conexão com o banco de dados não foi estabelecida.");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newPassword = isset($_POST['senha']) ? $_POST['senha'] : '';
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE `usuarios` SET `senha` = ?");
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        $stmt->bind_param("s", $hashedPassword);
        if ($stmt->execute()) {
            echo "<p> Senha atualizada com sucesso.</p>";
        } else {
            echo "<p> Erro ao atualizar a senha.</p>";
        }
        // Verifição do e-mail no banco de dados
//---------------------------------------------------//
        $email_verif = $_POST['email'] ?? '';
        if(!empty($email_verif)){
        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email= ?");
        $stmt->bind_param("s", $email_verif);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_row();
        $count = $row[0];
        if($count > 0){
            echo "<p> O e-mail'$email_verif' existe no banco de dados.</p>";
            }else{
            echo "<p> O e-mail '$email_verif' não foi encontrado no banco de dados.</p>";
        }
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração de Cadastro</title>
        <link rel = "stylesheet" href="./css/password.css">
    </head>
    <body>
        <div class="form-container">
            <form method="POST">
                <h1>Alteração de Cadastro</h1>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                    <label for="senha">Nova Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                    <a><button type="submit">Atualizar Senha</button></a>
            </form>
        </div>
        <button onclick="window.location.href='/projeto_Candidatos/structure/login.php';" 
        type="button">VOLTA</button>
    </body>
</html>
