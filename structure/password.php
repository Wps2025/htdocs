<?php
// Abertura do bloco de código <?PHP que deve ser interpretado e exeutado pelo servidor.    
    include_once 'config.php';
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
// É a tag de fechamento para um bloco de código ? >.   
?>
<!DOCTYPE html><!--"Eai navegador, isto é HTML na versão mais recente!".-->
<html lang="pt-BR"><!--Esta é a tag raiz que envolve todo o conteúdo deste o início do meu  código e "lang" especifica o 
    idioma principal do conteúdo da página.-->
    <head><!--Esta seção é início contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
        <meta charset="UTF-8"><!--Defina a codificação de caracteres do documento.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Eai navegador, ajuste a largura da 
        página para a largura do dispositivo (desktop, tablet, celular) em que ela está sendo visualizada e não aplique 
        nenhum zoom inicial.-->
        <title>Alteração de Cadastro/Deleta</title>
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
                <button type="submit">Atualizar Senha</button>
                <button onclick="window.location.href='/htdocs/structure/delete.php';" 
                type="button">Deleta</button>
            </form>
        </div>
        <button onclick="window.location.href='/htdocs/index.php';" 
        type="button">VOLTA</button>
    </body>
</html>
