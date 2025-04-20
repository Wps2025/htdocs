<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    // Conexão com o banco de dados
    include("config.php");

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
<!DOCTYPE html><!--"Eai navegador, isto é HTML na versão mais recente!".-->
<html lang="pt-BR"><!--Esta é a tag raiz que envolve todo o conteúdo deste o início do meu  código e "lang" especifica o 
idioma principal do conteúdo da página.-->
    <head><!--Esta seção é início contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
        <meta charset="UTF-8"><!--Defina a codificação de caracteres do documento.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Eai navegador, ajuste a largura da página
        para a largura do dispositivo (desktop, tablet, celular) em que ela está sendo visualizada e não aplique nenhum zoom inicial.-->
        <title>Conectando</title><!--Define o título que aparece na aba do navegador ou na barra de título da janela.-->
    <link rel = "stylesheet" href="./css/testLogin.css"><!--Este código conecta a página web ao arquivo de 
    estilos testLogin.css para definir a aparência visual do site.-->
    </head><!--Esta seção é fim contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
    <body><!--Aqui começa o que você realmente vê na tela.-->
        <div class="box"><!--Criei uma caixa para organizar os elementos de login.-->
    <?php
// Abertura do bloco de código <?PHP que deve ser interpretado e exeutado pelo servidor.    
    if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
// Se o arquivo atual "Comparação" é o mesmo que o arquivo principal que iniciou a execução. Se a condição for true
// (ou seja, o arquivo foi acessado diretamente exemplo "URL", o código executa um bloqueio HTTP 403 sigfica "Proibido"
// o acesso direto).        
        http_response_code(403);
    // Bloqueia o acesso direto
        echo "Não será possível acessar o sistema!<br>Bloqueia o acesso direto<br>Não tem uma conta?<br><br>";
        echo "<a href='/htdocs/structure/formulario.php'>Cadastre-se</a><br>";
        echo "<br><a href='/htdocs/index.php'>Login</a>";
        exit();
    }
// É a tag de fechamento para um bloco de código ? >.   
    ?>
    </div><!--Fim da caixa de login.-->
</body><!--Fim do que você vê na tela.-->
</html><!--Esta é a tag raiz que envolve todo o conteúdo este é fim do meu código.-->

