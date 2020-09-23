<?php  
	
	class loginDAO{
		private $dbConnection;

		function __construct($dbConnection){
			$this->dbConnection = $dbConnection;
		}

		function cadastrar($login){

			$campos = ["id","login","senha"];
			$campos_str = implode($campos, ",");

			foreach ($campos as $campo) {
				$valores[] = "'" . $login->{$campo} . "'";	
			}

			$valores_str = implode($valores, ",");

			$sql_insert = "INSERT INTO login ({$campos_str})
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