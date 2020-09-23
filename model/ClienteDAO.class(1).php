<?php  
	
	class ClienteDAO{
		private $dbConnection;

		function __construct($dbConnection){
			$this->dbConnection = $dbConnection;
		}

		function cadastrar($cliente){

			$campos = ["nome_completo", "email","senha","conirmacao_senha", "cpf", "data_nascimento", "cep", "logradouro", "numero", "complemento", "cidade", "estado"];
			$campos_str = implode($campos, ",");

			foreach ($campos as $campo) {
				$valores[] = "'" . $cliente->{$campo} . "'";	
			}

			$valores_str = implode($valores, ",");

			$sql_insert = "INSERT INTO cliente ({$campos_str})
			VALUES ({$valores_str})"; 

			$connection = $this->dbConnection->getConnection();

			$result = $connection->query($sql_insert);

			if(!$result){
				echo $connection->error;
			}

			return $result; 

		}
	}


?>