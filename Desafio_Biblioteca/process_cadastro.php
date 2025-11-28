<?php

require("conexao.php");

if($_POST){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
}

$sql = "INSERT INTO livros(titulo, autor, ano, categoria, quantidade) 
        VALUES ('$titulo', '$autor','$ano', '$categoria', '$quantidade')";

if($conn->query($sql) === TRUE){
    echo "<div style='background-color:#81C784; color:white; padding:10px; border-radius:5px;'>
            Livro cadastrado com sucesso!
          </div>";
    header("location:listagem.php");

} else {
    echo "<div style='background-color:#E57373; color:white; padding:10px; border-radius:5px;'>
            Erro ao cadastrar livro: " . $conn->error . "
          </div>";
}
