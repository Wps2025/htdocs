<!--
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
///////////////////////////////////////////
-->
<!DOCTYPE html>
<!--"Eai navegador, isto é HTML na versão mais recente!".-->
<html lang="pt-BR"><!--Esta é a tag raiz que envolve todo o conteúdo deste o início do meu  código e "lang" especifica o 
    idioma principal do conteúdo da página.-->
    <head>
    <!--Esta seção é início contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
        <meta charset="UTF-8"><!--Defina a codificação de caracteres do documento.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Eai navegador, ajuste a largura da 
        página para a largura do dispositivo (desktop, tablet, celular) em que ela está sendo visualizada e não aplique 
        nenhum zoom inicial.-->
        <title>Login</title>
        <!--Define o título que aparece na aba do navegador ou na barra de título da janela.-->
        <link rel = "stylesheet" href="./structure/css/index.css"><!--Este código conecta a página web ao arquivo de 
        estilos index.css para definir a aparência visual do site.-->
    </head>
    <!--Esta seção é fim contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
    <body>
    <!--Aqui começa o que você realmente vê na tela.-->
        <div class="box">
        <!--Criei uma caixa para organizar os elementos de login.-->
            <form action= "/htdocs/structure/testLogin.php" method="POST"><!--Este é uma formulário onde você pode digitar 
                suas informações para fazer login. Quando você clicar no botão 'Submit->Login', os dados serão enviados 
                para o enderenço das pastas até o arquivo->/htdocs/structure/testLogin.php de uma forma especifica.-->
                <h3>JÁ SOU CADASTRADO!</h3>
                <!--Está é uma terceiro título-->
                    <br><!--Pule uma linha-->
                    <input type="text" name="email" placeholder="E-mail">
                    <!--Este é um campo onde usuário pode digitar e-mail.-->
                    <br><br><!--Pule duas linhas-->
                    <input type="password" name="senha" placeholder="Senha"><!--Este é um campo onde você pode digitar 
                    senha do usuário (os caracteres geralmente aparecem escondidos).-->
                    <br><br><!--Pule duas linhas-->
                    <input class="inputSubmit" type="submit" name="submit_button" value="Login"><!--Este é o botão que 
                    você clica para enviar sua informações de login. -->
                    <br><br><!--Pule duas linhas-->
                    <a href="/htdocs/structure/password.php">Não lembro minha senha</a><!--Este é uma link que leva para 
                    outra página se usuário esqueceu a senha.-->
                    <br><br><br><br><!--Pule quatro linhas-->
                    <a href="/htdocs/structure/formulario.php">Cadastre-se</a><!--Este é link que te leva para uma página 
                    onde usuário pode se cadastrar.-->
            </form>
            <!--Fim do formulário de login.-->
        </div>
        <!--Fim da caixa de login.-->
    </body>
    <!--Fim do que você vê na tela.-->
</html>
<!--Esta é a tag raiz que envolve todo o conteúdo este é fim do meu código.-->