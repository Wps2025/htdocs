<?php
    if(!isset($_SESSION)){
        session_start();}

    if(!isset($_SESSION['user_id'])){    
        die("Não vai ser possivel acessa o sistema!
        Irei direcionar para cadastrar o login.
        <p><a href=\"login.php\">Entra aqui</</p>");}
?>