<?php
include_once 'config.php';
$email_delete = $_POST['email'] ?? '';
        if (!empty($email_delete)) {
            $stmt = $conn->prepare("DELETE FROM usuarios WHERE email = ?");
            if (!$stmt) {
                die("Erro na preparação da consulta: " . $conn->error);
            }
            $stmt->bind_param("s", $email_delete);
            if ($stmt->execute()) {
                echo "<p> Usuário com email '$email_delete' foi deletado com sucesso.</p>";
            } else {
                echo "<p> Erro ao deletar o usuário.</p>";
            }
            $stmt->close();
        }
        $conn->close();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar-Usuário</title>
        <link rel = "stylesheet" href="./css/delete.css">
    </head>
        <body>
            <div>
                <form method="POST">
                    <h1></h1>
                    <label for="email"><h1>E-mail Usuário<h1></label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Deletar Usuário</button>
                </form>
            </div>
            <a href="/htdocs/index.php" class="button">VOLTA</a>
        </body>
</html>
