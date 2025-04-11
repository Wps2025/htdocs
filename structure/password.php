<?php

    include_once 'config.php';

    // Ensure $conn is initialized as a valid database connection
    if (!isset($conn) || !$conn) {
        die("Erro: Conexão com o banco de dados não foi estabelecida.");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $newPassword = isset($_POST['senha']) ? $_POST['senha'] : '';
        $confirmPassword = isset($_POST['senha']) ? $_POST['senha'] : '';

        if ($newPassword !== $confirmPassword) {
            echo "As senhas não coincidem.";
            exit;
        }

        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("UPDATE `usuarios` SET `senha` = ? WHERE `email` = ?");
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        $stmt->bind_param("ss", $hashedPassword, $email);

        if ($stmt->execute()) {
            echo "Senha atualizada com sucesso.";
        } else {
            echo "Erro ao atualizar a senha.";
        }
        $stmt->close();
        $conn->close();
    }
?>

<form method="POST">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>
    <label for="senha">Nova Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <label for="senha">Confirmar Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <button type="submit">Atualizar Senha</button>
    </a><a href='/projeto_Candidatos/structure/login.php'><br><br>Login</a>
</form>
