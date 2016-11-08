<?php
session_start();
include_once('model/class/Manager.class.php');

$manager = new Manager();
$search_result = $manager->busca_voo($_POST['cid_origem'], $_POST['cid_destino'], $_POST['data_voo']);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pesquisa Vôo</title>
		<link rel="stylesheet" type="text/css" href="view/assets/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<header class="row navbar navbar-default cabecalho">
				<div class="col-lg-8">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Projeto AirFare</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="navbar-header">
                        <p class="navbar-text"><?php include_once 'view/navbar.php'; ?></p>
                    </div>
				</div>
			</header>
			<section class="row">
				<div class="col-lg-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title text-center"><strong>Refine sua busca</strong></h3>
						</div>
						<div class="panel-body">
							

						</div>
					</div>
				</div>
				<div class="col-lg-9" >
					<div class="panel panel-success" >
                        <!-- para as opcoes q nao tem pagina msm, como perfil, verifica se foi mandado algum OPTION pela url e adequa o nome do panel e titulo da pag -->
						<div class="panel-heading" style="background-color:lightgreen;">
							<h3 class="panel-title">
								<span class="glyphicon glyphicon-th">
									<strong style="font-family:arial;"> Resultado da busca</strong>
								</span>
							</h3>
						</div>
					</div>
					<div class="panel-body">
                        <?php foreach ($search_result as $key) { ?>
                        <div style="background-color:white; height:250px;">
                            <div class="text-center" style="height:25px; width:49.7%; background-color:#5F9EA0; float:left"><strong>SAÍDA</strong></div>
                            <div class="text-center" style="height:25px; width:49.7%; background-color:#5F9EA0; float:right"><strong>DESTINO</strong></div>
                            <div style="background-color:#DAA520; height:25px; width:100%; float:left">
                                <div class="text-center"  style="float:left; width:7%;"><strong>UF</strong></div>
                                <div class="text-center" style="float:left; width:15%;"><strong>Cidade</strong></div>
                                <div class="text-center" style="float:left; width:28%;"><strong>Aeroporto</strong></div>
                                <div class="text-center" style="float:left; width:7%;"><strong>UF</strong></div>
                                <div class="text-center" style="float:left; width:15%;"><strong>Cidade</strong></div>
                                <div class="text-center" style="float:left; width:28%;"><strong>Aeroporto</strong></div>
                            </div>

                            <div style="background-color:white; height:40px; width:100%; float:left">
                                <div class="text-center"  style="float:left; width:7%;"><?php echo $key['estado_origem'] ?></div>
                                <div class="text-center" style="float:left; width:15%;"><?php echo $key['cidade_origem'] ?></div>
                                <div class="text-center" style="float:left; width:28%;"><?php echo $key['aeroporto_origem'] ?></div>
                                <div class="text-center" style="float:left; width:7%;"><?php echo $key['estado_destino'] ?></div>
                                <div class="text-center" style="float:left; width:15%;"><?php echo $key['cidade_destino'] ?></div>
                                <div class="text-center" style="float:left; width:28%;"><?php echo $key['aeroporto_destino'] ?></div>
                            </div>

                            <div class="text-center" style="height:25px; width:100%; background-color:#5F9EA0; float:left"><strong>INFORMAÇÕES DO VÔO</strong></div>

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
                                <div class="text-center"  style="float:left; width:13%;"><?php echo $key['data_voo'] ?></div>
                                <div class="text-center" style="float:left; width:13%;"><?php echo $key['hora_saida'] ?></div>
                                <div class="text-center" style="float:left; width:13%;"><?php echo $key['hora_chegada'] ?></div>
                                <div class="text-center" style="float:left; width:13%;"><?php echo $key['duracao_voo'] ?></div>
                                <div class="text-center" style="float:left; width:14%;"><?php echo $key['companhia'] ?></div>
                                <div class="text-center" style="float:left; width:6%;"><?php echo $key['vagas_disponiveis'] ?></div>
                                <div class="text-center" style="float:left; width:12%;">R$ <?php echo $key['preco'] ?>,00</div>
                                <div class="text-center" style="float:left; width:16%;"><a href="dados_voo.php?id=<?php echo $key['id'] ?>" class="btn btn-sm btn-success">Comprar</a></div>
                            </div>
                        </div>
                        <?php } ?>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>