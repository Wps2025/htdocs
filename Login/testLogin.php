<?php

//session_start();

//print_r($_REQUEST); São os parâmentro que estão vindo,
// do formulario do meu login.

//if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //Vai deixar acessa o sistema.
    //include_once('config.php');
    //$email = $_POST['email'];
    //$senha = $_POST['senha'];

    //print_r('Email: ' . $email);|//Testando as minhas variáveis
    //print_r('<br>');            |//email e senha que está chegando
    //print_r('Senha: ' . $senha);|//os dados.
    //Sistema de sugurança:Comparação do email e senha no banco de dados no Mysqli.
    //$sql =  "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    //$result = $conn->query($sql);
    //print_r($sql);
    //print_r($result);
    //Irá verificar quantidades de linhas se for menor de 1 "Não existe"
    //| Mas se for maior do que 0 "Existe".
    //if (mysqli_num_rows($result) < 1) {
       // unset($_SESSION['email']); // Caso não existe email e senha, será
        //unset($_SESSION['senha']); // | destruido.
        //header('Location: login.php');
        //exit();
        
    //} else {
        //$_SESSION['email'] = $email; // Caso existir o email e senha,
       // $_SESSION['senha'] = $senha; // terá acesso.
       // header('Location: sistemaS.php');
       // exit();
        
    //}
//} else {
    //header('location: login.php');
    //exit();
     //Caso não existir uma variavel,
    //não vai deixar acessa o sistema. Irá retornar para o sistema login.
//}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    include("config.php"); 
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql =  "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {

            echo "Login realizado com sucesso!";
           header("Location: sistemaS.php"); 

        } else {
            echo "Senha incorreta!";
            header("Location: login.php?erro=1");
        }
    } else {
        echo "Usuário não encontrado!";
        header("Location: home.php?erro=1");

    }

    $conn->close();
}
?>


