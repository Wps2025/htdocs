<?php
    if(!isset($_SESSION)){
        session_start();}

    if(!isset($_SESSION['user_id'])){    
        die("Não vai ser possivel acessa o sistema!
        Cadastrar o formulario / Acessa login novamente.
        <p><a href=\"../Loginn/login.html\">Entra aqui</</p>");}
?>