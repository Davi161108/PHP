<?php
require_once "proteger.php";
include "funcoes.php";
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST["campo-titulo"] ?? '';
    $autor = $_POST["campo-autor"] ?? '';
    $ano = $_POST["campo-ano"] ?? 0;
    $quantidade = $_POST["campo-quantidade"] ?? 0;
    $categoria = $_POST["campo-categoria"] ?? '';

    if (validarLivro($titulo, $autor, $quantidade, $ano, $categoria)) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Livro inválido.";
    }
} else {
    header("Location: cadastro_livro.php");
    exit;
}
?>

<br><br>
<a href="home.php">Voltar</a>