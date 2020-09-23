<?php  

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno21/jaqueline/Apoteck2.0/Apoteck2.0/";

include_once $dir_path . "model/login.class.php";

include_once $dir_path . "model/loginDAO.class.php";

include_once $dir_path . "model/DBConnection.class.php";

	class ClienteBusiness{

	
		function __construct(){

		}	
		//esta função vai receber o cliente do controller
		function cadastrar($login){
			$dbconnection = new DBConnection();

			$loginDAO = new loginDAO($dbconnection);

			return $loginDAO->cadastrar($login);
		}
	}
?>