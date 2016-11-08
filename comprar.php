<?php

session_start(); 

if(!isset($_SESSION['user'])){

	//se não houver usuário logado redireciona para pág inicial
	header("location: index.php");

}else{

	//recupera os dados do usuário logado e do voo que foi solicitada a compra
	$user = $_SESSION['user'];
	$dados_voo = $_SESSION['dados_voo'];

}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Compra de Passagens - Airfare</title>
		<link rel="stylesheet" type="text/css" href="view/assets/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<header class="row navbar navbar-default cabecalho"><!-- cabecalho -->
				<div class="col-lg-8 ">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Projeto AirFare</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="navbar-header">
						<p class="navbar-text"><?php include_once 'view/navbar.php'; ?></p>
					</div>
				</div>
			</header>	<!-- fim cabecalho -->
			<section class="row">

                
               <div class="col-lg-2"></div>
                <div class="col-lg-8" >
                    <div class="panel panel-success" >
                        <div class="panel-heading" style="background-color:lightgreen;"><!-- para as opcoes q nao tem pagina msm, como perfil, verifica se foi mandado algum OPTION pela url e adequa o nome do panel e titulo da pag -->
                            <h3 class="panel-title text-center">
                                <span class="glyphicon glyphicon-th">
                                    <strong style="font-family:arial;">Comprar Passagem</strong>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="panel-body">


                      <h3>Dados do vôo</h3>
                      <p><strong>Preço:</strong> R$ <?php foreach ($dados_voo as $key) {echo $key["preco"]; }?>,00</p>
                      <p><strong>Data:</strong> <?php foreach ($dados_voo as $key) {echo $key["data_voo"]; }?></p>
                      <p><strong>Companhia:</strong> <?php foreach ($dados_voo as $key) {echo $key["companhia"]; }?></p>
                      <p><strong>Aeroporto de Destino:</strong> <?php foreach ($dados_voo as $key) {echo $key["aeroporto_destino"]; }?> (<?php foreach ($dados_voo as $key) {echo $key["estado_destino"]; }?>) </p>

                      <hr>

                      <h3>Dados do solicitante</h3>
                      <p><strong>Nome:</strong> <?php foreach ($user as $key) {echo $key["nome"]; }?></p>
                      <p><strong>Telefone:</strong> <?php foreach ($user as $key) {echo $key["telefone"]; }?></p>
                      <p><strong>Rg:</strong> <?php foreach ($user as $key) {echo $key["rg"]; }?></p>
                     
                      <br>
                      <button class="btn btn-primary">Confirmar Compra</button>               
                      

                    </div>
                </div>
              <div class="col-lg-2"></div> 
            </section>
		</div>
	</body>
</html>