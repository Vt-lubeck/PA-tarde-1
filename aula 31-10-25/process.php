<?php 

include("connection.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senhac = $_POST['senhac'];

$sql = "INSERT INTO user(email, password) VALUES ('$usuario', '$senha')";

if($conn->query($sql) === TRUE){
    echo "Usuário cadastrado com sucesso!";

}
