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







	
	


	



} //fim class








?>