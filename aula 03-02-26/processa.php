<?php 

include("connection.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$datan = $_POST['datan'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario(cpf, nome, datan, email, senha) VALUES ('$cpf', '$nome', '$datan', '$email', '$senha')";

if($conn->query($sql) === TRUE){
    echo "Usuário cadastrado com sucesso!";

}
