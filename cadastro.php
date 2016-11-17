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
						<a class="navbar-brand" href="index.php"><strong>Projeto AirFare</strong></a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="navbar-header navbar-right">
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
                        


                        <form method="POST" action="controller/cadastrar.php" >
                            <label>*Nome</label>   <?php if(isset($_GET['name_insuficient'])){ echo '&nbsp;&nbsp;&nbsp;<strong style="color:red">Nome precisa ter ao menos 10 caracteres</strong>';  } ?>   <?php if(isset($_GET['name_invalid'])){ echo '&nbsp;&nbsp;&nbsp;<strong style="color:red">Informe apenas letras e espaços</strong>';  } ?>
                              <input type="text" id="" name="nome" placeholder="Informe o seu nome" class="form-control"  required maxlength="80" /><br>
                          
                            <label>*E-mail</label>
                              <input type="email" name="email" placeholder="Informe o seu e-mail" class="form-control" required maxlength="50" /><br>

                            <label>*Senha:</label>  <?php if(isset($_GET['password_insuficient'])){ echo '&nbsp;&nbsp;&nbsp;<strong style="color:red">Senha precisa ter ao menos 6 caracteres</strong>';  } ?>
                              <input  type="password"  name="password" placeholder="Informe uma senha de acesso"  class="form-control" style="width:250px" required /><br>

                             <label>*Confirmar Senha:</label>  <?php if(isset($_GET['password_different'])){ echo '<br><strong style="color:red">Senha e Confirmação de senhas não estão iguais</strong>';  } ?>
                              <input  type="password" name="confpassword" placeholder="Informe uma senha de acesso"  class="form-control" style="width:250px" required /><br>
  

                            <label>*CPF:</label> <?php if(isset($_GET['cpf_insuficient'])){ echo '&nbsp;&nbsp;&nbsp;<strong style="color:red">Informe todos os dígitos do CPF</strong>';  } ?>
                              <input  type="number" name="cpf" placeholder="Informe o seu cpf"  class="form-control" style="width:250px" required maxlength="10" /><br>

                            <label>*RG:</label>
                              <input  type="number" name="rg" placeholder="Informe o seu rg"  class="form-control" style="width:250px" required maxlength="13" /><br>

                            <label>*Cartão de Crédito</label>
                                <select name="cartaocredito" class="form-control">
                                    <option value="1">Visa</option>
                                    <option value="2">MasterCard</option>
                                </select>  <br>

                            <label for="">Telefone:</label>
                              <input  type="number" name="telefone" placeholder="Informe o seu telefone"  class="form-control" style="width:180px" maxlength="11" /><br>

                            <button class="btn btn-primary form-control">Cadastrar</button>
                            <br><br><br>
                        </form>

                    </div>
                </div>
              <div class="col-lg-4"></div> 
            </section>
                  
		</div>
	</body>
</html>