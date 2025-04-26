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
    <title>Sistema | logado </title>
    <link rel = "stylesheet" type="text/css" href="/htdocs/login/system/css/sistemaS.css">
</head>
<body>
    <header>
        <a href="#" id="logo">LOGO</a>
        <button id="openMenu">&#9776;</button>
            <nav id="menu">
                <button id="closeMenu">X</button>
                <a href="/htdocs/login/system/sistemaS.php">Ínicio</a>
                <a href="#">Texto</a>
                <a href="#">Texto</a>
                <a href="/htdocs/login/restrictedArea/logout.php">Sair</a>
            </nav>
    </header>
            <main>
                <section>
                    <form>
                    <fieldset>
            <legend><h2>Apresentação</h2></legend>
            <p>Sou William, instrutor de trânsito com dois anos de experiência e mais de dez anos de habilitação. Minha
            especialidade é formar futuros condutores que dirijam com segurança e responsabilidade. O aprendizado se 
            desenvolve com o tempo e existem diversos métodos para isso. Um conceito que destaco é a Pirâmide de Aprendizagem 
            de William Glasser, esses métodos promovem uma retenção muito maior (70% a 95%) em comparação com os passivos 
            (ler, ouvir - 10% a 20%). Portanto, para formar condutores seguros e responsáveis, é crucial ir além da teoria 
            tradicional e envolver os alunos ativamente, variando as abordagens de ensino para um aprendizado profundo e duradouro.
            <br><br><p> E vocês devem estar se perguntando: como assim aula prática? Sim, aluno, vamos praticar através de 
            sequências de repetições nas leituras.</p>
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