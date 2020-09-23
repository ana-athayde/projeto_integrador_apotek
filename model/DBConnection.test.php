<?php  

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno20/Erick/PIN=Erick/loja/";

include_once $dir_path . "model/DBConnection.class.php";

$dbConnection = new DBConnection();
$connection = $dbConnection->getConnection();

?>