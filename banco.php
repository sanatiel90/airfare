<?php

include_once('model/class/Connection.class.php');
include_once('model/class/Manager.class.php');

//banco de dados, criando conexao
try{
    //connection sera um novo obj de PDO, q recebera como parametros o servidor e nome do banco, o usuário e a senha
    $connection = new PDO("mysql:host=localhost;dbname=aereo", "root", "vertrigo");
    $connection->exec("set names utf8");

    $pdo->prepare("SELECT * FROM aeroportos")->execute();

} catch (PDOException $e) {
    echo "Falha: ".$e->getMessage();
    exit();
}
