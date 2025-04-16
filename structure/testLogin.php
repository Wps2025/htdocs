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
        // Verifica se a senha está correta
        if (password_verify($senha, $row['senha'])) {
        // Se a senha estiver correta, redireciona para o sistema
        header('Location: /projeto-candidatos/login/system/sistemaS.php');
        exit();
    } else {
        // Se a senha ou email estiver incorreta, exibe a mensagem de erro
        header('Location: login?erro.password&email');
    }
} else {
        // Se o cadastro não for encontrado, exibe a mensagem de erro
        header('Location: error?use.not.found');
    }
        //Fecha a conexão
    $stmt->close();
    //Fecha a conexão com o banco de dados
    $conn->close();
}
include_once 'error.php';
?>

