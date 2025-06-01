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
    <title>Conteúdo | Teórico </title>
    <link rel = "stylesheet" type="text/css" href="/login/system/css/theory.css">
</head>
<body>
    <header>
        <a href="#" id="logo">LOGO</a>
        <button id="openMenu">&#9776;</button>
            <nav id="menu">
                <button id="closeMenu">X</button>
                <a href="/login/system/sistemaS.php">ínicio</a>
                <a href="#">Texto</a>
                <a href="#">Texto</a>
                <a href="/login/restrictedArea/logout.php">sair</a>
            </nav>
    </header>
            <main>
                <section>
                    <form>
                    <fieldset>
            <legend><h2>Apresentação</h2></legend>
            <p>Olá, eu sou William, instrutor de trânsito, é um prazer estar com vocês fazendo parte do processo de aprendizagem de direção veicular. Especializado por formar futuros condutores, por um trânsito mais seguro e harmonioso, tenho há mais de dez anos de habilitação, com dois anos de profissão dedicados a guiar novos condutores nessa jornada transformadora.
            <br><br>
            Este conteúdo visa estimular a reflexão teórica sobre os assuntos.
            <br><br>
            Vamos juntos nessa?<br><br>

            Em breve colocaremos conteúdo! Obrigado pela compreensão. 
            </fieldset><br>
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