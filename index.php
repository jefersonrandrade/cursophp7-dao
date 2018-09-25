<?php

require_once("config.php");

//Exibe um cadastro
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Exibe uma lista de cadastros
$lista = Usuario::getList();

echo json_encode($lista);

?>