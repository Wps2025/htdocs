<?php

//include_once '';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | HOME</title>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, red, yellow);
        color: black;
    }
    div{
        text-decoration: none;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 60px;
    }
    h1{
        text-align: center;
    }
    a{
        color: black;
        text-decoration: none;
        font-size: 30px;
    }
</style>

</head>
<body>
    <h1>Sejam bem-vindos</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <?php
            if (isset($_GET['erro'])) {
            echo "<p style='color:black;font:size15px;px;text-align:center;
            '>Usuário não encontrado!</p>";
            }
        ?>
    </div>
</body>
</html>
