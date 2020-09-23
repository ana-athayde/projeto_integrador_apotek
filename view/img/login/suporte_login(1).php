<?php  

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno21/jaqueline/Apoteck2.0/Apoteck2.0/";

include_once $dir_path . "controller/loginController.class.php";

/* Esta variável possui os dados do formulário enviados via POST, na forma de um array associativo */
print_r($_POST);

$formulario = $_POST;

$campos = ["email","senha"];

$formulario = array_intersect_key($formulario, array_flip($campos));

echo nl2br("\n");

print_r($formulario);

/* Contruimos o objeto Cliente Controller*/
$loginControler = new loginController();

/* Pedimos para ele cadastrar com os dados do formulario */
$sucesso = $loginControler->verificar($formulario);

if ($sucesso){
    // Procura os dados do cliente no banco
    $cliente = $clienteController->procurar($formulario);
    
    session_start();
    $_SESSION["cliente"] = $cliente;
    
    header("Location: index.php");
    
} else{
    // Mostra um alert de usuario nao encontrado
}





?>