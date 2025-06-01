<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="./css/error.css">


</head>
<body>
    <header>
            <nav id="menu">
                <a href="/index.php" class="button">volta</a>
            </nav>
            <a id="openMenu"></a>
            <a id="closeMenu" style="display: none;"></a>
    </header>
                <main>
                    <section>
                        <form method="POST">
                                <p>"Não será possível acessar o sistema! <br>Cadastre-se no formulário ou acessa o login 
                                novamente!<br><br>Não tem uma conta?</p><br><br>
                                <a href='/structure/formulario.php'>Cadastre-se</a><br>
                                <br><a href='/index.php'>Login</a>
                        </form>
            </section>
            </main>
            <footer></footer>

    <script type="text/javascript">
        const openMenu = document.getElementById('openMenu'); // Define openMenu
        const closeMenu = document.getElementById('closeMenu'); // Define closeMenu
        const menu = document.getElementById('menu'); // Define menu

        openMenu.addEventListener('click', () => {
            menu.style.display = 'flex';

            menu.style.right = (menu.offsetWidth * -1) + 'px';

            openMenu.style.display = 'none';
            setTimeout(() => {
                menu.style.opacity = '1';

                menu.style.right = '0';
            }, 10);
        });

        closeMenu.addEventListener('click', () => {
            menu.style.opacity = '0';

            menu.style.right = (menu.offsetWidth * -1) + 'px';

            setTimeout(() => {
                menu.removeAttribute('style');
                openMenu.removeAttribute('style');
            }, 200);
        });
    </script>
</body>
</html>