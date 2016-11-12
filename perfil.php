<?php

session_start(); 

if(!isset($_SESSION[md5("user")])){

    header("location: index.php");

}else{

    $user = $_SESSION[md5("user")];
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página Inicial - Airfare</title>
		<link rel="stylesheet" type="text/css" href="view/assets/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<header class="row navbar navbar-default cabecalho"><!-- cabecalho -->
				<div class="col-lg-8 ">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><strong>Projeto AirFare</strong></a>
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
                        <div class="panel-heading" style="background-color:lightgreen;">
                            <h3 class="panel-title text-center">
                                <span class="glyphicon glyphicon-th">
                                    <strong style="font-family:arial;">Perfil</strong>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-center">Seus Dados</h3>
                        <form method="POST" action="" >
                          <div class="col-lg-12">
                            <div class="col-lg-6">
                                
                                <label>Nome</label>
                                <input type="text" readonly class="form-control" value="<?php foreach($user as $key){echo $key["nome_cli"];} ?>" /><br>
                            
                                
                                <label>Telefone *</label>
                                <input type="text" name="new_tel" class="form-control" value="<?php foreach($user as $key){echo $key["telefone"];} ?>" /><br>

                            </div>

                            <div class="col-lg-6">
                                <label>E-mail</label>
                                <input type="text" readonly class="form-control" value="<?php foreach($user as $key){echo $key["email"];} ?>" /><br>

                                <label>Cartão Crédito</label>
                                <input type="text" readonly class="form-control" value="<?php foreach($user as $key){echo $key["nome_cartao"];} ?>" /><br>

                                
                               
                            </div>
                                
                                 <div class="col-lg-12"> 
                                 <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary form-control">Atualizar dados</button>
                                    </div>
                                 <div class="col-lg-4"></div>
                               </div>  

                          </div>

                              
                        </form>

                       

                          
                      
                    </div> <!-- fim panel-body -->
                </div>
              <div class="col-lg-2"></div> 
            </section>
		</div>
	</body>
</html>