<?php  

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno21/jaqueline/Apoteck2.0/Apoteck2.0/";

include_once $dir_path . "model/Cliente.class.php";

include_once $dir_path . "model/ClienteDAO.class.php";

include_once $dir_path . "model/DBConnection.class.php";

	class ClienteBusiness{

	
		function __construct(){

		}	
		//esta função vai receber o cliente do controller
		function cadastrar($cliente){
			$dbconnection = new DBConnection();

			$clienteDAO = new ClienteDAO($dbconnection);

			return $clienteDAO->cadastrar($cliente);
		}
	}
?>