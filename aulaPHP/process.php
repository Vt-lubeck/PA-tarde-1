<?php 

include("connection.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senhac = $_POST['senhac'];

$sql = "INSERT INTO usuario(senha, usuario) VALUES ('$senha', '$usuario')";

if($conn->query($sql) === TRUE){
    echo "Usuário cadastrado com sucesso!";

}
