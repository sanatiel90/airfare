<?php
session_start();

include_once 'model/class/Manager.class.php';

$manager = new Manager();

//coloca os dados do voo solicitado numa session
$_SESSION['dados_voo'] = $manager->voo_solicitado($_GET['id']);


if(isset($_SESSION[md5('user')])){

	header("location: comprar.php");

}else{

	header("location: login.php");

}






?>