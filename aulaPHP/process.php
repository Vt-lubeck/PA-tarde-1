<?php 

include("connection.php");

$usuario = $_POST['usuario'];
$senha = $_POST['password'];
$senhac = $_POST['confirm_password'];

$sql = "INSERT INTO user(email, password) VALUES ('$usuario', '$senha')";

if($conn->query($sql) === TRUE){
    echo "Usuário cadastrado com sucesso!";

}
