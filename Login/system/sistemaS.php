<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
include_once '../restrictedArea/protect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel  | Usuário logado </title>
    <link rel="icon" href="https://instrutor-trs.byethost24.com/index.php"/>
    <link rel = "stylesheet" type="text/css" href="/login/system/css/sistemaS.css">
</head>
<body>
    <header>
        <a href="#" id="logo">LOGO</a>
        <button id="openMenu">&#9776;</button>
            <nav id="menu">
                <button id="closeMenu">X</button>
                <a href="#">Texto</a>
                <a href="#">Texto</a>
                <a href="#">Texto</a>     
                <a href="/login/restrictedArea/logout.php">sair</a>
            </nav>
    </header>
    <aside>Relacionado</aside>
            <main>
                <section>
                    <form>
                <fieldset><a href="/login/system/practical.php">Prática</a></fieldset>
                <fieldset><a href="/login/system/theory.php">Teórica</a></fieldset>
                    </form>
                </section>
            </main>

    <footer>Rodapé</footer>

    <script type="text/javascript">

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