<?php
    $verify = password_verify($senha, $senha_criptor);
    if($verify){
        echo"logado";
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: sistemaS.php");
        exit();
    }else{
        echo "não logado";
    }
    ?>