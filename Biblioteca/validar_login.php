<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "contador.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';
    $usuario2 = $_POST["usuario2"] ?? '';
    $senha2 = $_POST["senha2"] ?? '';

    $usuarioCorreto = "admin";
    $senhaCorreta = "123456";
    $usuarioCorreto2 = "Davo";
    $senhaCorreta2 = "123";

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = "Davi";
        $_SESSION["perfil"] = "admin";
        header("Location: home.php");
        exit;
    } elseif ($usuario2 === $usuarioCorreto2 && $senha2 === $senhaCorreta2) {
        header("Location: validar_login.php");
        exit;
    }
    
    else {
        echo "Usuário ou senha inválidos.<br><br>";
        echo '<a href="login.php">Tentar novamente</a>';
    }
}
?>