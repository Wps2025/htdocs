<?php
session_start();
if (!isset($_SESSION['submit'])) {
    header("Location: login.php");
    exit;
}

?>