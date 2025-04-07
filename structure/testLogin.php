<?php
///////////////////////////////////////////
// Programador: Aluno William P. Santiago//
//                                       //
///////////////////////////////////////////

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Conexão com o banco de dados
        include("config.php");
        //Verificar a conexão 
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($senha, $row['senha'])) {
                // Se a senha estiver correta, armazena os dados do usuário na sessão
                header('Location: /projeto_Candidatos/Login/system/sistemaS.php');
                exit();
            } else {
                // Se a senha estiver incorreta, armazena a mensagem de erro na sessão
                echo"Senha ou E-mail incorreta!";
                header('Location: login.php?erro=1');
                exit();}
            } else {
            echo "Usuário não encontrado!";
            header('Location: home.php?erro=1');
            exit();
        }
        // Fecha a conexão
        $stmt->close();
        // Fecha a conexão com o banco de dados
        $conn->close();
    }
