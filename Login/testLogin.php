<?php

    //print_r($_REQUEST); São os parâmentro que estão vindo,
    // do formulario do meu login.

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        //Vai deixar acessa o sistema.
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

       //print_r('Email: ' . $email);|//Testando as minhas variáveis
        //print_r('<br>');            |//email e senha que está chegando
        //print_r('Senha: ' . $senha);|//os dados.

        //Sistema de sugurança:Comparação do email e senha no banco de dados no Mysqli.
        $sql=  "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result= $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        //Irá verificar quantidades de linhas se for menor de 1 "Não existe"
        //| Mas se for maior do que 0 "Existe".
        if(mysqli_num_rows($result) < 1){
            
            //print_r('Não existe');

            header('location: login.php');
        }
            
            else{

            //print_r('Existe');

            header('location: sitemaS.php');


        }

    }
    else
    {

    header('location: login.php');//Caso não existir uma variavel,
    //não vai deixar acessa o sistema. Irá retornar para o sistema login.

    }


?>