<?php
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){  
    header('location:index.php?erro_login=true');
    exit;
}
?>
