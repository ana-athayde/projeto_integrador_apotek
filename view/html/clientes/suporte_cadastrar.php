<?php  


$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN_AnaAthayde/loja/";

include_once $dir_path . "controller/ClienteController.class.php";

/* Esta variável possui os dados do formulário enviados via POST, na forma de um array associativo */
print_r($_POST);

$formulario = $_POST;

$campos = [
	"nome_completo", 
	"email",
	"senha",
	"cpf",
	"data_nascimento",
	"endereco_cep",
	"endereco_logradouro",
	"endereco_complemento",
	"endereco_cidade",
	"endereco_estado",
	"endereco_numero"];

$formulario = array_intersect_key($formulario, array_flip($campos));

echo nl2br("\n");

print_r($formulario);

/* Contruimos o objeto Cliente Controller*/
$clienteControler = new ClienteController();

/* Pedimos para ele cadastrar com os dados do formulario */
$clienteControler->cadastrar($formulario);





?>