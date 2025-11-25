<?php

require("conexao.php");

if($_POST){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
}

$sql = "INSERT INTO livros(titulo, autor, ano, categoria, quantidade) VALUES ('$titulo', '$autor','$ano', '$categoria', '$quantidade')";

if($conn->query($sql) === TRUE){
    echo "<p style='color:#81C784;'>Livro cadastrado com sucesso!</p>";
}

else{
    echo "<p style='color:#E57373;'>Erro Ao cadastrar " . $conn->error. "</p>";
}