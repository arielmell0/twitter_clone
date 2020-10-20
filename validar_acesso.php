<?php

require_once 'connectDB.php';

$objDB = new connectClass();
$link = $objDB->openConnect();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario . '<br>';
$senha . '<br>';

$querySQLlogin = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";

$resultado_id = mysqli_query($link, $querySQLlogin);

if ($resultado_id) {
    $dados_usuarios = mysqli_fetch_array($resultado_id);

    if(isset($dados_usuarios['usuario'])){
        echo 'Usuario existe!';
    } else {
        header('Location: index.php?erro=01');
    }

    
} else {
    echo 'Erro na execução da consulta, favor entrar em contato com o admin do site.';
};
