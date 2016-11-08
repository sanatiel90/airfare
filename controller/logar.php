<?php

include_once '../model/class/Manager.class.php';
include_once '../model/class/User.class.php';

$manager = new Manager();


$user = $manager->login_cliente($_POST['email'],$_POST['password']);


if($user == false){
	header("location: http://localhost/projeto_airfare/login.php?error=user_not_found");

}else{

	session_start();

	$_SESSION['user'] = $user;

	

	if(isset($_SESSION['dados_voo'])){
		header("location: http://localhost/projeto_airfare/comprar.php");
	
	}else{
		header("location: http://localhost/projeto_airfare/index.php");

	}

	

}






?>