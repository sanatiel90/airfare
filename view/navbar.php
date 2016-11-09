<?php 


if(isset($_SESSION['user'])){  

$user = $_SESSION['user'];

?>

Bem vindo, <?php foreach($user as $key){echo $key['nome'];} ?>
<br>
<a href="" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-user"></span> Perfil</a>

<a href="controller/logout.php" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-off"></span> Sair</a>

<?php  }else{  ?>

<strong><a href="login.php">Iniciar Sessão</a></strong> ||
<strong><a href="cadastro.php">Criar Conta</a></strong> 


<?php   }   ?>







