<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
//include_once '../restrictedArea/protect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | logado </title>
    <link rel = "stylesheet" type="text/css" href="../system/css/sistemaS.css">
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
                    </form>
        <h2>Procedimento iniciais para condução do veículo</h2>
    <br>
    <p>Futuros condutores vocês deveram encontrar sua zona de conforto!
        <br><br>
        <p>Primeiro Passo:</p>
        <br>
        Repetição 2x
        <br><br>
        1°- Ao entrar no veículo, feche a porta completamente.
        <br>
        2°- Ajuste o banco de forma que seus pés alcancem nos pedais.
        <br>
        3°- As mãos ao volante (9:15 ou 10:10) com uma leve flexão nos braços.
        <br>
        4°- Regule retrovisores (interno e externos) para ter uma visão clara nas partes de trás e nas laterais.
        <br>
        5°- Coloque o cinto de segurança, que esteja bem ajustado ao corpo.
        <br><br>
        ° Justificativa: A importância de fechar a porta, ajuste do banco, retrovisores (interno e externos), e colocar o
        cinto de segurança para uma postura ideal.  
    </p>
    <br><br>
        <p>Segundo Passo:</p>
        <br>
        Repetição 2x
        <br><br>
        1°- Observe o painel de instrumentos. Certifique-se se está em ponto neutro.
        <br>
        2°- Insira a chave na ignição. Gire a chave uma vez para ligar algumas luzes do painel de instrumentos.
        <br>
        3°- Gire a chave,  mais um vez e segure por 2 á 3 segundos e solte para dar partida no motor principal.
        <br>
        4°- E assim veículo em funcionamento.
        <br><br>
        ° Justificativa: Enfatiza com o painel e verifição algumas luzes antes de dar a partidar. Detalha 
        processo de quando girar e soltar a chave.   
    </p>
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