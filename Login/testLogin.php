<?php

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
        //Vai deixar acessa o sistema.
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('Email: ' . $email);
        print_r('Senha: ' . $senha);



}
else
{       //Caso não existir, não vai deixar acessa o sistema. 
    header('location: login.php');
}

?>