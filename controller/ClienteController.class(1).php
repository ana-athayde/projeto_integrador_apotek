<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno21/Apoteck2.0/Apoteck2.0/";

include_once $dir_path . "model/Cliente.class.php";

class ClienteController{
	
	function cadastrar($formulario)	{

		$cliente = new Cliente();

		$cliente->setData($formulario);

		


	}

}


?>