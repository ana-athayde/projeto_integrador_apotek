<?php

class Cliente{
	private $id;
	private $login;
	private $senha;
	

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