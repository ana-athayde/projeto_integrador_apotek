<?php

class Cliente{
	private $id;
	private $nome_completo;
	private $cpf;
	private $email;
	private $data_nascimento;
	private $cep;
	private $logradouro;
	private $numero;
	private $complemento;
	private $cidade;
	private $estado;

	function __construct(){

	}

	function setData($dados){
		foreach ($dados as $propriedade => $valor) {
			$this->$propriedade = $valor;
		}
	}

	function __get($propriedade){
		return $this->$propriedade;
	}

	function __set($propriedade, $valor){
		$this->$propriedade = $valor;
	}
}

?>