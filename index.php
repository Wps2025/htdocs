<!--
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
-->
<!DOCTYPE html><!--"Ei navegador, isto é HTML na versão mais recente!".-->
<html lang="pt-BR"><!--Esta é a tag raiz que envolve todo o conteúdo deste o início do meu  código e "lang" especifica o idioma principal do conteúdo da página.-->
    <head><!--Esta seção é início contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
        <meta charset="UTF-8"><!--Defina a codificação de caracteres do documento.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Ei navegador, ajuste a largura da página para a largura do dispositivo (desktop, tablet, celular) em que ela está sendo visualizada e não aplique nenhum zoom inicial.-->
        <title>Login</title><!--Define o título que aparece na aba do navegador ou na barra de título da janela.-->
        <link rel = "stylesheet" href="./structure/css/index.css"><!--Este código conecta a página web ao arquivo de estilos index.css para definir a aparência visual do site.-->
    </head><!--Esta seção é fim contém informações sobre o documento HTML que não são exibidas diretamente na página.-->
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
</html><!--Esta é a tag raiz que envolve todo o conteúdo este é fim do meu código.-->