<?php
include_once('Connection.class.php');

class Manager extends Connection{
	public function busca_voo ($origem, $destino, $data) {
		$pdo = parent::getCon();

		try {
			$stmt = $pdo->prepare(
			    "SELECT * FROM v_dados_voo WHERE " .
                "cidade_origem LIKE :origem AND " .
                "cidade_destino LIKE :destino AND " .
                "data_voo = :data_voo"
            );
			$stmt->bindValue(":origem", "%$origem%");
			$stmt->bindValue(":destino", "%$destino%");
			$stmt->bindValue(":data_voo", "$data");

			$stmt->execute();

			$result = array();

			if ($stmt->rowCount()) {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$result[] = $row;
				}
				return $result;

			} else {
				return false;
			}

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}



	public function voo_solicitado($id){
		$pdo = parent::getCon();

		try{

			$stmt = $pdo->prepare("SELECT * FROM v_dados_voo WHERE id = :id LIMIT 1");

			$stmt->bindValue(":id",$id);

			$stmt->execute();

			$result = array();

			if($stmt->rowCount()){
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$result[] = $row;
					
				}
				return $result;
			}else{
				return false;
			}


		}catch(Exception $e){
			echo $e->getMessage();
		}

	}




	public function login_cliente($email,$password){

		$pdo = parent::getCon();

		try{

			$stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :password  LIMIT 1");

			
			$stmt->bindValue(":email",$email);
			$stmt->bindValue(":password",$password);

			$stmt->execute();

			$result = array();

			if($stmt->rowCount()){
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$result[] = $row;
					
				}
				return $result;
			}else{
				return false;
			}

		}catch(Exception $e){

			echo $e->getMessage();
		}

	}




	public function insert_cliente($nome,$cpf,$email,$telefone,$rg,$senha,$cartaocredito){

		$pdo = parent::getCon();

		try{

			//chamando stored procedure de inserção de clientes que foi criada no banco dados
			$stmt = $pdo->prepare("CALL sp_insere_cliente(:nome,:cpf,:email,:telefone,:rg,:senha,:cartaocredito)");

			$stmt->bindValue(":nome",$nome);
			$stmt->bindValue(":cpf",$cpf);
			$stmt->bindValue(":email",$email);
			$stmt->bindValue(":telefone",$telefone);
			$stmt->bindValue(":rg",$rg);
			$stmt->bindValue(":senha",$senha);
			$stmt->bindValue(":cartaocredito",$cartaocredito);
			
			$stmt->execute();


		}catch(Exception $e){
			echo $e->getMessage();
		}

	}


	public function insert_pedido($quantidade,$preco,$cod_voo,$cod_cli){

			$pdo = parent::getCon();

			try{

				$stmt = $pdo->prepare("INSERT INTO pedidos(quantidade_pessoas,preco_total,cod_voo,cod_cliente) VALUES(:quant,:preco,:voo,:cli)");

				$stmt->bindValue(":quant",$quantidade);
				$stmt->bindValue(":preco",$preco);
				$stmt->bindValue(":voo",$cod_voo);
				$stmt->bindValue(":cli",$cod_cli);

				if($stmt->execute()){
					return $pdo->lastInsertId();
				}else{
					return false;
				}


			}catch(Exception $e){
				echo $e->getMessage();
			}

	}
	


	



} //fim class








?>