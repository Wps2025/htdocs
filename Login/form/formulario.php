<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Conexão com o banco de dados
    include("");
    //Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email', '$senha')";
    if ($conn->query($sql) === TRUE) {

            header('Location: login.php');
            exit();

        } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
