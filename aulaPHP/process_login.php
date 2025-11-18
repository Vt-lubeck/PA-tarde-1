<?php 
session_start();
require("connection.php");

if($_POST){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];



$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' LIMIT 1";
$res = mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0){
    $usuario = mysqli_fetch_assoc($res);

    if($senha == $usuario['senha']){
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['usuarioC'] = $usuario['usuario'];
        Header("Location:painel.php");
        exit;

    } else {
        $erro = "Senha Incorreta";
    }

} else {
    $erro = "Usúario Incorreto"; 
   }

}



