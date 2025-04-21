<?php
// Abertura do bloco de código <?PHP que deve ser interpretado e exeutado pelo servidor.
    include_once 'config.php';
// Inclui o arquivo banco de dados apenas uma vez, isso evita erros como redefinição de funções ou classes.
//---------------------------------------------------------------------------------------------------------------//
    // Verificação da conexão do banco de dados!
//---------------------------------------------------------------------------------------------------------------//
// Mas se $conn não estiver definida!  
    if (!isset($conn) || !$conn) {
// Se OP negação lóg|<-->|OP negação variável se for true em qualquer uma das duas condições for verdadeira. 
        die("Erro: Conexão com o banco de dados não foi estabelecida.");
        // Será apresentado ESTÁ mensagem de erro.
    }
// Mas se a uma conexão do banco dados foi estabelecida com sucesso, não será apresenta nenhuma mensagem de erro.
//---------------------------------------------------------------------------------------------------------------//    
    // Verifição do senha no banco de dados!
//---------------------------------------------------------------------------------------------------------------//
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Se script atual retorna M_R HTTP usado para acessar a página por POST "Comparação" se o método é exatamente "POST". 
        $newPassword = isset($_POST['senha']) ? $_POST['senha'] : '';
// Se elemento existe no campo 'senha' v_s_V<-OU->v_s_F? foi enviado via POST.Se foi, o valor é atribuida à variável.
// Caso contrário, recebe uma string vazia (''). É garantir que sempre à um valor na variável, mesmo não tenha sido enviado.  
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);// É o algoritmo usado para gerar o hash.
// O resultado, armazenado na variável é versão criptografada, sendo que a senha_hash é usada para criar um hash seguro 
// da senha original que irá para o banco de dados criptografado.
        $stmt = $conn->prepare("UPDATE `usuarios` SET `senha` = ?");
// A variável o resultado, a conexão prepara uma consulta SQL para execução, protegendo contra SQL Injection.
// Atualiza o campo 'senha' na tabela do banco de dados, será subtituído por um valor seguro posteriomente.  
        // Verifica se não existe a variável declaração no banco de dados. Se for falso, exibera uma erro.
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
    }
    // Exibindo uma mensagem de erro junto com o erro específico retornado pelo objeto de conexão.  
        $stmt->bind_param("s", $hashedPassword);
// A variável declaração é usada para vincular um parâmetro 's' e preparada no PHP, e o valor será vinculado ao parâmetro
// na consulta senha no SQL. Isso prevenir ataques SQL injetion,  pois os valores são tratados de forma segura pelo banco
// de dados. 
        if ($stmt->execute()) {
// Se a execução da declaração preparada foi bem-sucedida, exibe uma mensagem de sucesso.             
            echo "<p>Senha atualizada com sucesso.</p>";
        } else {
            echo "<p>Erro ao atualizar a senha: " . $stmt->error . "</p>";
    }
    // Exibe uma mensagem de erro detalhada em caso de falha.
$stmt->close(); 
// Fecha a declaração preparada para liberar recursos.
//--------------------------------------------------------------------//
        // Verifição do e-mail no banco de dados
//--------------------------------------------------------------------//
        $email_verif = $_POST['email'] ?? '';
// Op. coalescência nula '??' para verificar se a chave 'email' existe no campo email e não é nula. Se existir, o valor 
// corresponderá a variável. Caso contrário, a variável recebe uma string vazia('').        
        if(!empty($email_verif)){
// Verifica se a variável não está vazia usando a função empty(). Retorna true se estiver vazia, como operador '! não' 
// inverte o resultado, então dentro do 'if' será executado apenas não estiver vazia. Isso garantir que contém algum valor
// antes de prosseguir.      
        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email= ?");
// A variável resulte, a conexão prepara uma consulta SQL para execução, protegendo contra SQL Injection.
// Atualiza o campo 'email' na tabela do banco de dados, será subtituído por um valor seguro posteriomente.
    // Verifica se não existe a variável resulte no banco de dados. Se for falso, exiberá uma erro.   
         if(!$stmt){
                die ("Erro na preparação da consulta " . $conn->error);
            }
        // Exibindo uma mensagem de erro junto com o erro específico retornado pelo objeto de conexão.
        $stmt->bind_param("s", $email_verif);
// A variável declaração é usada para vincular um parâmetro 's' e preparada no PHP, e o valor será vinculado ao parâmetro
// na consulta email no SQL. Isso prevenir ataques SQL injetion,  pois os valores são tratados de forma segura pelo banco 
// de dados. 
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_row();
        $count = $row[0];
        if($count > 0){
            echo "<p> O e-mail'$email_verif' existe no banco de dados.</p>";
            }else{
            echo "<p> O e-mail '$email_verif' não foi encontrado no banco de dados.</p>";
        $stmt->close();
    // Fecha a declaração preparada para liberar recursos.
    }
}
$conn->close();
// Fecha a conexão com o banco de dados fora do bloco condicional.
}   
?>
<!--É a tag de fechamento para um bloco de código ?>. -->
<!DOCTYPE html>
<!--"Eai navegador, isto é HTML na versão mais recente!".-->
<html lang="pt-BR"><!--Esta é a tag raiz que envolve todo o conteúdo deste o início do meu  código e "lang" especifica o 
    idioma principal do conteúdo da página.-->
    <head>
    <!--Esta seção é início contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
        <meta charset="UTF-8">
        <!--Defina a codificação de caracteres do documento.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Eai navegador, ajuste a largura da 
        página para a largura do dispositivo (desktop, tablet, celular) em que ela está sendo visualizada e não aplique 
        nenhum zoom inicial.-->
        <title>Alteração de Cadastro/Deleta</title>
        <!--Define o título que aparece na aba do navegador ou na barra de título da janela.-->
        <link rel = "stylesheet" href="./css/password.css">
    </head>
    <!--Esta seção é fim contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
    <body>
    <!--Aqui começa o que você realmente vê na tela.-->
        <div class="form-container">
            <!--Criei uma caixa para organizar os elementos, que provavelmente contém um
            formulário.-->
            <form method="POST"><!--Abertura formulário que envia dados informações de forma segura para servido 
                método HTTP POST, pois os dados não aparecem na URL.-->
                <h1>Alteração de Cadastro</h1><!--Este é primero título-->
                <label for="email">Email:</label><!--Cria um rótulo associado a um campo de entrada de e-mail no 
                formulário. Sendo assim conecta o rótulo de entrada com mesmo id= "email" no banco de dados.-->
                <input type="text" id="email" name="email" required>
                <label for="senha">Nova Senha:</label><!--Cria um rótulo associado a um campo de entrada de nova senha no 
                formulário. Sendo assim conecta o rótulo de entrada com mesmo id= "senha" no banco de dados.-->
                <input type="password" id="senha" name="senha" required>
                <button type="submit">Atualizar Senha</button><!--Cria um botão de submit->Atualizar senha que enviará 
                um comando para atualizar a senha no banco de dados-->
                <button onclick="window.location.href='/htdocs/structure/delete.php';" 
                type="button">Deleta</button><!--Cria um botão quando for clicado no Deleta, neste caso será redirecionado
                para outra página delete.php.-->
            </form>
            <!--Fim do formulário de Atualizar Senha.-->
        </div>
        <!--Fim da caixa de Atualizar Senha.-->
        <button onclick="window.location.href='/htdocs/index.php';" 
        type="button">VOLTA</button><!--Cria um botão quando for clicado no VOLTA, neste caso será redirecionado
        para outra página index.php.-->
    </body>
    <!--Fim do que você vê na tela.-->
</html>
<!--Esta é a tag raiz que envolve todo o conteúdo este é fim do meu código.-->
