<?php
    session_start();
        session_destroy();
        exit;

    if (isset($_GET['erro'])) {
        echo "<p style='color:red;font:size20px;px;text-align:center;'
        >Senha ou E-mail incorreta!</p>";
        }
?>
