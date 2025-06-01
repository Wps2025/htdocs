<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Conexão com o banco de dados
    include("config.php");
    //Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        header('Location: /index.php');
        exit();
    } else {
        echo "Erro: " . $stmt->error;
        $stmt->close();
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de cadastro</title>
        <link rel = "stylesheet" href="./css/formulario.css">
        </head>
        <body>
        <header>
            <nav id="menu">
                <a href="/index.php" class="button">volta</a>
            </nav>
            <button id="openMenu"></button>
            <button id="closeMenu" style="display: none;"></button>
    </header>
                <main>
                    <section>
                        
                    <form method="POST" action="/structure/formulario.php">
                        
                    <fieldset>
                        <legend><b>CADASTRE-SE</b></legend>
                        <div class="inputBox"><br>
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome Completo</label>
                        </div>
                        <br>
                        <div class="inputBox"><br>
                            <input type="text" name="email" id="email" class="inputUser" required>
                            <label for="email" class="labelInput">Digite seu e-mail</label>
                        </div>
                        <br>
                        <div class="inputBox"><br>
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelInput">Criar uma Senha</label>
                        </div>
                        <br>
                        <input type="submit" name="submit" id="submit">
                </fieldset>
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