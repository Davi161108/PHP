<?php
require_once "proteger.php";
include "contador.php";


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Página inicial</title>
</head>

<body>
    <h1>Sistema de Biblioteca</h1>
    <p> Bem-vindo, <?php echo htmlspecialchars ($_SESSION["nome"]); ?> </p>
    <p> Usuário: <?php echo htmlspecialchars ($_SESSION["usuario"]); ?> </p>
    <p> Perfil: <?php echo htmlspecialchars ($_SESSION["perfil"]); ?> </p>
    <a href="cadastro_livro.php"> Cadastrar livro </a> <br><br>
    <a href="logout.php"> Sair </a>
    <?php
    if (isset($_SESSION['acessos'])) {
        echo "<p><strong>Quantidade de acessos realizados na sessão: </strong>" . $_SESSION['acessos'] . "</p><br>";
    } 
    ?>
</body>

</html>