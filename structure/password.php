<?php
    include_once 'config.php';
    // Ensure $conn is initialized as a valid database connection
    if (!isset($conn) || !$conn) {
        die("Erro: Conexão com o banco de dados não foi estabelecida.");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newPassword = isset($_POST['senha']) ? $_POST['senha'] : '';
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE `usuarios` SET `senha` = ?");
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        $stmt->bind_param("s", $hashedPassword);
        if ($stmt->execute()) {
            echo "<p> Senha atualizada com sucesso.</p>";
        } else {
            echo "<p> Erro ao atualizar a senha.</p>";
        }
        // Verifição do e-mail no banco de dados
//---------------------------------------------------//
        $email_verif = $_POST['email'] ?? '';
        if(!empty($email_verif)){
        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email= ?");
        $stmt->bind_param("s", $email_verif);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_row();
        $count = $row[0];
        if($count > 0){
            echo "<p> O e-mail'$email_verif' existe no banco de dados.</p>";
            }else{
            echo "<p> O e-mail '$email_verif' não foi encontrado no banco de dados.</p>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar senha | Excluir a conta</title>
        <link rel = "stylesheet" href="./css/password.css">
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
                                <legend><h1>Altualização</h1></legend>
                            <label for="email">E-mail:</label>
                            <input type="text" id="email" name="email" required>
                            <br><br>
                            <label for="senha">Nova Senha:</label>
                            <input type="password" id="senha" name="senha" required>
                            <br><br>
                            <button type="submit">Atualizar Senha</button>
                            <button onclick="window.location.href='/structure/delete.php';" 
                            type="button">Remover conta</button>
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