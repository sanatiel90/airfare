<?php

include_once '../model/class/Manager.class.php';

$manager = new Manager();
/*
echo $_POST['nome'];
echo '<br>';

echo $_POST['email'];
echo '<br>';

echo $_POST['password'];
echo '<br>';

echo $_POST['cartaocredito'];
echo '<br>';

echo $_POST['telefone'];
echo '<br>';

echo $_POST['cpf'];
echo '<br>';

echo $_POST['rg'];
echo '<br>';
*/






if(!preg_match("/^[a-zA-Z ]*$/",$_POST['nome'])){

	header("location: http://localhost/projeto_airfare/cadastro.php?name_invalid");

}else if(strlen($_POST['nome']) < 10){

	header("location: http://localhost/projeto_airfare/cadastro.php?name_insuficient");

}else if(strlen($_POST['password']) < 6){

	header("location: http://localhost/projeto_airfare/cadastro.php?password_insuficient");

}else if(strcmp($_POST['password'], $_POST['confpassword']) != 0){

	header("location: http://localhost/projeto_airfare/cadastro.php?password_different");

}else if(strlen($_POST['cpf']) < 11){

	header("location: http://localhost/projeto_airfare/cadastro.php?cpf_insuficient");

}else{


$manager->insert_cliente($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['telefone'],$_POST['rg'],sha1($_POST['password']),$_POST['cartaocredito']);

	header("location: http://localhost/projeto_airfare/login.php?user_created");

}

?>