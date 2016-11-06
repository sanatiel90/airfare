<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial - Airfare</title>
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

  		<div class="col-lg-3"> <!-- inicio sidebar -->
  			<div class="panel panel-success">
  				<div class="panel-heading">
  					<h3 class="panel-title text-center">  
            			<strong>Menu</strong>
            		</h3>
  				</div>
  				
  			  	<div class="panel-body" >
             	

            	</div>

  			</div>
  				
  		</div>	<!-- fim da sidebar -->

  		 <div class="col-lg-9" >
  		<div class="panel panel-success" >
          <div class="panel-heading" style="background-color:lightgreen;">                                            <!-- para as opcoes q nao tem pagina msm, como perfil, verifica se foi mandado algum OPTION pela url e adequa o nome do panel e titulo da pag -->
            <h3 class="panel-title"> <span class="glyphicon glyphicon-th"> <strong style="font-family:arial;"> Faça sua pesquisa por um vôo</strong>  </span>  </h3>
          </div>

        </div>

          <div class="panel-body" > 


	
		
		<form method="POST" action="buscavoo.php" >
			<input type="text" id="origem" name="cid_origem" placeholder="Informe a cidade de origem" class="form-control" style="width:350px" required />
			<br>
			<input type="text" name="cid_destino" placeholder="Informe a cidade de destino" class="form-control" style="width:350px" required/>
			<br>
			<label>Data da saída:</label>

			<input type="date" name="data_voo" class="form-control" style="width:170px" required/>
			<br>
			<button class="btn btn-success">Pesquisar</button>
		</form>
		

		</div>
  		
        </div>


  		</div>	

		 
   </section>		 

	</div>

	

</body>
</html>