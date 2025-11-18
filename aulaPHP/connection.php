<?php 

$server = "localhost";
$user = "root";
$password = "root";
$database = "site";
$port = 3307;

$conn = new mysqli($server, $user, $password, $database, $port);

if($conn->connect_error){
    die("Erro na conexão: " . $conn->connect_error);
}