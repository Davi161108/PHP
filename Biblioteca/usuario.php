<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("location: login.php");
    exit;
}

if(($_SESSION["perfil"] !== "administrador")){
    echo "Acesso negado!";
    exit;
}
?>

!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página do Admin</title>
</head>
<body>
    <p>Você pode acessar essa página, Admin!</p>
    <br><br>
    <a href="home.php">Voltar para Home</a>
</body>
</html>