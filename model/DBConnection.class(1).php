<?php  

class DBConnection{
	private $host;
	private $data_base;
	private $user;
	private $pass;
	private $port;
	private $mysqli;

	function __construct(){
		$this->host = "localhost";
		$this->data_base = "aluno20";
		$this->user = "aluno20";
		$this->pass = "aluno";
		$this->port = "3306";
	}

	function getConnection(){
		if($this->mysqli == null){
			
			$mysqli = new mysqli($this->host,
									   $this->user,
									   $this->pass,
									   $this->data_base,
									   $this->port);

		if($mysqli->connect_errno){
			echo "falha ao conectar ao BD do MySQL (" . $mysqli->
														$connect_errno . ")" .
														$mysqli->connect_errno;


			}

			$this->mysqli = $mysqli;
		}

	return $this->mysqli;
	}

}



?>