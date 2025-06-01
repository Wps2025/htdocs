<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel = "stylesheet" href="./structure/css/index.css"></head>
<body>
    <header>
            <nav id="menu">
                <a href="#"></a>
            </nav>
            <button id="openMenu"></button>
            <button id="closeMenu" style="display: none;"></button>
    </header>
    <aside></aside>
            <main>
                <section>
                <form action= "/structure/testLogin.php" method="POST"><!--Este é uma formulário onde você pode digitar 
                suas informações para fazer login. Quando você clicar no botão 'Submit->Login', os dados serão enviados 
                para o enderenço das pastas até o arquivo->/htdocs/structure/testLogin.php de uma forma especifica.-->
                <h3>JÁ SOU CADASTRADO!<br><br><br>Estamos em manutenção!</h3>
                <!--Está é uma terceiro título-->
                    <br><!--Pule uma linha-->
                    <!--<input type="text" name="email" placeholder="E-mail">
                    <!--Este é um campo onde usuário pode digitar e-mail.-->
                    <br><br><!--Pule duas linhas-->
                    <!--<input type="password" name="senha" placeholder="Senha"><!--Este é um campo onde você pode digitar 
                    senha do usuário (os caracteres geralmente aparecem escondidos).-->
                    <br><br><!--Pule duas linhas-->
                    <!--<input class="inputSubmit" type="submit" name="submit_button" value="Login"><!--Este é o botão que 
                    você clica para enviar sua informações de login. -->
                    <br><br><!--Pule duas linhas-->
                    <!--<a href="/structure/password.php">Não lembro minha senha</a><!--Este é uma link que leva para 
                    outra página se usuário esqueceu a senha.-->
                    <br><br><br><br><!--Pule quatro linhas-->
                    <!--<a href="/structure/formulario.php">Cadastre-se</a><!--Este é link que te leva para uma página 
                    onde usuário pode se cadastrar.-->
            </form>
                </section>
    
            </main>
            <footer></footer>
    <script type="text/javascript">
        const openMenu = document.getElementById('openMenu'); // Define openMenu
        const closeMenu = document.getElementById('closeMenu'); // Define closeMenu
        const menu = document.getElementById('menu'); // Define menu

        openMenu.addEventListener('click', () => {
            menu.style.display = 'flex'

            menu.style.right = (menu.offsetWidth * -1) + 'px'

            openMenu.style.display = 'none'
            setTimeout(() => {
                menu.style.opacity = '1'

                menu.style.right = '0'
            }, 10)
            
        })
        closeMenu.addEventListener('click', () => {
            menu.style.opacity = '0'

            menu.style.right = (menu.offsetWidth * -1) + 'px'

            setTimeout(() => {
                menu.removeAttribute('style')
                openMenu.removeAttribute('style')
            }, 200)
            
        })
    </script>
</body>
</html>