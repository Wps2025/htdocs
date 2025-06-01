<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Conexão com o banco de dados
    include("config.php");

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . htmlspecialchars($conn->connect_error));
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verifica se a senha está correta
            if (password_verify($senha, $row['senha'])) {
                // Se a senha estiver correta, redireciona para o sistema
                header('Location: /login/system/sistemaS.php');
                exit();
            } else {
                    // 1. Remover todas as variáveis de sessão
                    session_unset();
                // Se a senha estiver incorreta, exibe a mensagem de erro
                header('Location: /index.php?erro=password_email');
                exit();
            }
        } else {
                    // 1. Remover todas as variáveis de sessão
                    session_unset();
            // Se o cadastro não for encontrado, exibe a mensagem de erro
            header('Location: /structure/error.php?erro=use_not_found');
            exit();
        }
        // Fecha a conexão
        $stmt->close();
    } else {
        die("Erro na preparação da consulta: " . htmlspecialchars($conn->error));
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/testLogin.css">
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