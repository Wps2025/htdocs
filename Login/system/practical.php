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
    <title>Conteúdo | Prático </title>
    <link rel = "stylesheet" type="text/css" href="/login/system/css/practical.css">
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
                    <form><div>
                    <fieldset>
<legend><h2>Apresentação</h2></legend>
            <p>Olá, eu sou William, instrutor de trânsito, é um prazer estar com vocês fazendo parte do processo de aprendizagem de direção veicular. Especializado para formar futuros condutores, por um trânsito mais seguro, tenho há mais de dez anos de habilitação, com dois anos de profissão dedicados a guiar novos condutores nessa jornada transformadora.
            <br><br>
            Daí vocês estão se perguntando, prática? Sim, iremos seguir um procedimento com método de repetições de leituras em ordem. Como se diz o ditado, "A repetição leva à perfeição".
            <br><br>
            Vamos juntos nessa? 
            </fieldset><br>
                    </div></form>
                    <h2>Instruções de Condução</h2><br>
                    <h3>Primeiro Passo:</h3><br>
                    <audio controls>
                        <source src="/login/system/music/Test1.mp3"
                        type="audio/mpeg">
                        <source src="/login/system/music/Test1.ogg"
                        type="audio/ogg">
                        <source src="/login/system/music/Test1.wav"
                        type="audio/wav">
                        Seu navegador não suporta o elemento de áudio.
                    </audio>
                    <form>
                    <ol type="1">
                    <li>Entrou no veículo, fecha a porta.</li>
                    <li>Ajuste o banco.</li>
                    <li>Retrovisores.</li>
                    <li>Espelho (interno).</li>
                    <li>Coloque o cinto de segurança.</li><br>   
                    <ul>
                        <li>Justificativa: É bom lembrar, fechar a porta, ajuste do banco, retrovisores (externos e interno) e colocar
                        cinto de segurança são de grande importância.</li>
                    </ul>
                </ol>
                <h3>Segundo Passo:</h3><br>
                    <audio controls>
                        <source src="/login/system/music/Test2.mp3"
                        type="audio/mpeg">
                        <source src="/login/system/music/Test2.ogg"
                        type="audio/ogg">
                        <source src="/login/system/music/Test2.wav"
                        type="audio/wav">
                        Seu navegador não suporta o elemento de áudio.
                    </audio>
                <ol type="1">
                    <li>Observa-se o painel de instrumentos.</li>
                    <li>Certifique-se se está em ponto neutro.</li>
                    <li>Alguns modelos de veículos precisam, pressionar primeiro o pedal da embreagem antes dar partida no motor principal.</li>
                    <li>Insira a chave na ignição, gire a chave para ligar sistema eletro/eletrônico do veículo.</li>
                    <li>No segundo giro, segura um curto período 2 a 3 segundos e solte, para dar partida no motor principal.</li>
                    <li>Assim, veículo está funcionando.</li><br>
                    <ul>
                        <li>Enfatiza com o painel e verifica algumas luzes antes de dar a partida no motor. Detalhe quando girar a chave de ignição solte para não comprometer momento nenhum de                                ligar o veículo.</li>
                    </ul>
                </ol>
                <h3>Terceiro Passo:</h3>
                <ol type="1">
                    <p>Aluno, presta bem atenção!</p><br>
                	<li>Vamos executar alguns procedimentos.</li><br>
                    <p>Executa.</p><br>
                    <li>Pressiona o pedal da embreagem e mantém.</li><br>
                    <p>Após isso.</p><br>
                    <li>Colocar a primeira marcha.</li><br>
                    <p>Em seguida.</p><br>
                    <li>Pressiona o pedal do freio e mantém.</li><br>
                    <p>Próximo passo.</p><br>
                    <li>Aciona a seta para esquerda, com intenção de sair.</li>
                    <li>Com as duas mãos ao volante.</li>
                    <li>Direciona-se olhar para o retrovisor do lado esquerdo.</li>
                    <li>Certifique-se que não há veículos, pedestres etc.</li><br>
                    <p>Atenção.</p><br>
                    <li>Observa o trajeto no qual a superfície é plana? aclive? (subida) ou declive? (decida).</li>
                    <li>Supondo que a superfície é “Plana”.</li>
                    <li>Solta o freio de estacionamento.</li>
                    <li>Solta o pedal do freio, gradativamente.</li><br>
                    <p>Assim o veículo está móvel.</p><br>
                    <p>Prossegue.</p><br>
                    <li>Gire o volante para o lado esquerdo suficiente, para poder sair com veículo.</li>
                    <li>Solta o pedal da embreagem bem devagar.</li>
                    <li>Não precisa acelerar.</li><br>
                    <p>Após você ter soltado o pedal do freio e o pedal da embreagem?</p><br>
                    <li>O veículo está em movimento.</li><br>
                    <ul>
                        <li>Esses foram os procedimentos iniciais para colocar o veículo em movimento, desde ação do condutor, atenção e os cuidados para não comprometer a sua saída.</li>
                    </ul>
                </ol>
            </form>
        </section>
    </main>
</div>
    <footer>Rodapé</footer>
     <script>
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