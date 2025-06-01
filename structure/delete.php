<?php
include_once 'config.php';

$email_delete = $_POST['email'] ?? '';
        if (!empty($email_delete)) {
            $stmt = $conn->prepare("DELETE FROM usuarios WHERE email = ?");
            if (!$stmt) {
                die("Erro na preparação da consulta: " . $conn->error);
            }
            $stmt->bind_param("s", $email_delete);
            if ($stmt->execute()) {
                echo "<p> Usuário com email '$email_delete' foi deletado com sucesso.</p>";
            } else {
                echo "<p> Erro ao deletar o usuário.</p>";
            }
            $stmt->close();
        }
        $conn->close();
        
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remover conta</title>
        <link rel = "stylesheet" href="./css/delete.css">
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
                            <fieldset>
                                <legend><h1>Remover conta</h1></legend>
                                <br>
                                <label for="email"><h1>E-mail<h1></lablb>
                                <input type="email" id="email" name="email" required>
                                <br><br>
                                <button type="submit">Excluir</button>
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
