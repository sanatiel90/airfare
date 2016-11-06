<?php

include_once 'model/class/Connection.class.php';
include_once 'model/class/Manager.class.php';

$manager = new Manager();

$cid_origem = $_POST['cid_origem'];
$cid_destino = $_POST['cid_destino'];
$data_voo = $_POST['data_voo'];

$result_pesquisa = $manager->busca_voo($cid_origem,$cid_destino,$data_voo);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa Vôo</title>
	<link rel="stylesheet" type="text/css" href="view/assets/bootstrap/css/bootstrap.css">
	
</head>
<body>
  <div class="container">
  			<header class="row navbar navbar-default cabecalho" >	<!-- cabecalho -->
  	
  	 
  	 <div class="col-lg-8 ">
  	   <div class="navbar-header"  href="#">
  	  		<a  class="navbar-brand " href="index.php"  >
  	  		 
  	  	   Projeto AirFare 
  	  		</a>  

  	   </div>
  	 </div>

  	 
  	 <div class="col-lg-4">	
  	   <div class="navbar-header">
  	 		<p class="navbar-text"> 	</p>
  	   </div>
  	 

  	 </div>


  	</header>	<!-- fim cabecalho -->


  <section class="row">

   <div class="col-lg-3">
  			<div class="panel panel-success">
  				<div class="panel-heading">
  					<h3 class="panel-title text-center">  
            			<strong>Menu</strong>
            		</h3>
  				</div>
  				
  			  	<div class="panel-body" >
             	
            	</div>

  			</div>
  				
  		</div>	


   <div class="col-lg-9" >
  		<div class="panel panel-success" >
          <div class="panel-heading" style="background-color:lightgreen;">                                            <!-- para as opcoes q nao tem pagina msm, como perfil, verifica se foi mandado algum OPTION pela url e adequa o nome do panel e titulo da pag -->
            <h3 class="panel-title"> <span class="glyphicon glyphicon-th"> <strong style="font-family:arial;"> Resultado da busca</strong>  </span>  </h3>
          </div>

        </div>

          <div class="panel-body" > 

		 
		
		

	<?php 
			
			
			

		foreach($result_pesquisa as $key){


		echo '<div style="background-color:white; height:250px;">
				<div class="text-center" style="height:25px; width:49.7%; background-color:#5F9EA0; float:left">
					<strong>SAÍDA</strong>				
				</div>

				<div class="text-center" style="height:25px; width:49.7%; background-color:#5F9EA0; float:right">
					<strong>DESTINO</strong> 				
				</div>

				<div style="background-color:#DAA520; height:25px; width:100%; float:left">
					<div class="text-center"  style="float:left; width:7%;"><strong>UF</strong></div>	
					<div class="text-center" style="float:left; width:15%;"><strong>Cidade</strong></div>
					<div class="text-center" style="float:left; width:28%;"><strong>Aeroporto</strong></div>
					<div class="text-center" style="float:left; width:7%;"><strong>UF</strong></div>
					<div class="text-center" style="float:left; width:15%;"><strong>Cidade</strong></div>
					<div class="text-center" style="float:left; width:28%;"><strong>Aeroporto</strong></div>

				</div>

					<div style="background-color:white; height:40px; width:100%; float:left">
					<div class="text-center"  style="float:left; width:7%;">'.$key['estado_origem'].'</div>	
					<div class="text-center" style="float:left; width:15%;">'.$key['cidade_origem'].'</div>
					<div class="text-center" style="float:left; width:28%;">'.$key['aeroporto_origem'].'</div>
					<div class="text-center" style="float:left; width:7%;">'.$key['estado_destino'].'</div>
					<div class="text-center" style="float:left; width:15%;">'.$key['cidade_destino'].'</div>
					<div class="text-center" style="float:left; width:28%;">'.$key['aeroporto_destino'].'</div>

				</div>

				<div class="text-center" style="height:25px; width:100%; background-color:#5F9EA0; float:left">
					<strong>INFORMAÇÕES DO VÔO</strong>				
				</div>

				<div style="background-color:#DAA520; height:25px; width:100%; float:left">
					<div class="text-center"  style="float:left; width:13%;"><strong>Data do Vôo</strong></div>	
					<div class="text-center" style="float:left; width:13%;"><strong>Hora Saída</strong></div>
					<div class="text-center" style="float:left; width:13%;"><strong>Hora Chegada</strong></div>
					<div class="text-center" style="float:left; width:13%;"><strong>Duração</strong></div>
					<div class="text-center" style="float:left; width:14%;"><strong>Companhia</strong></div>
					<div class="text-center" style="float:left; width:6%;"><strong>Vagas</strong></div>
					<div class="text-center" style="float:left; width:12%;"><strong>Preço</strong></div>
					<div class="text-center" style="float:left; width:16%;"><strong>Ação</strong></div>
				</div>

				<div style="background-color:white; height:30px; width:100%; float:left">
					<div class="text-center"  style="float:left; width:13%;">'.$key['data_voo'].'</div>	
					<div class="text-center" style="float:left; width:13%;">'.$key['hora_saida'].'</div>
					<div class="text-center" style="float:left; width:13%;">'.$key['hora_chegada'].'</div>
					<div class="text-center" style="float:left; width:13%;">'.$key['duracao_voo'].'</div>
					<div class="text-center" style="float:left; width:14%;">'.$key['companhia'].'</div>
					<div class="text-center" style="float:left; width:6%;">'.$key['vagas_disponiveis'].'</div>
					<div class="text-center" style="float:left; width:12%;">R$ '.$key['preco'].',00</div>
					<div class="text-center" style="float:left; width:16%;"><a href="#" class="btn btn-sm btn-success">Comprar</a></div>
				</div>

			</div>';
			
			}

			?>






		</div>
  		
        </div>


  		</div>	

		 
   </section>		 
  </div>


</body>
</html>
