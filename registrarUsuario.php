<?php

require_once 'connectDB.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objDB = new connectClass();
$link = $objDB -> openConnect();

$sql = "insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha')";

//executar a query
if(mysqli_query($link, $sql)){
    echo 'Usuário registrado com sucesso!!!';
} else {
    echo 'Falha ao registrar o usuário!!!';
};

?>