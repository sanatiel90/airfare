<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro - Airfare</title>
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

                
               <div class="col-lg-4"></div>
                <div class="col-lg-4" >
                    <div class="panel panel-success" >
                        <div class="panel-heading" style="background-color:lightgreen;">
                            <h3 class="panel-title text-center">
                                <span class="glyphicon glyphicon-th">
                                    <strong style="font-family:arial;">Cadastro</strong>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="" >
                            <label>*Nome</label>
                            <input type="text" id="" name="" placeholder="Informe o seu nome" class="form-control"  required /><br>
                            <label>*E-mail</label>
                            <input type="email" name="" placeholder="Informe o seu e-mail" class="form-control" required /><br>

                             <label for="">*Senha:</label>
                            <input id="" type="password" name="" placeholder="Informe uma senha de acesso"  class="form-control" style="width:250px" required /><br>

                            <label for="">*CPF:</label>
                            <input id="" type="text" name="" placeholder="Informe o seu cpf"  class="form-control" style="width:250px" required/><br>

                             <label for="">*RG:</label>
                            <input id="" type="text" name="" placeholder="Informe o seu rg"  class="form-control" style="width:250px" required/><br>

                            <label for="">Telefone:</label>
                            <input id="" type="text" name="" placeholder="Informe o seu telefone com DDD"  class="form-control" style="width:250px" /><br>

                            <button class="btn btn-success form-control">Cadastrar</button>
                        </form>
                    </div>
                </div>
              <div class="col-lg-4"></div> 
            </section>
		</div>
	</body>
</html>