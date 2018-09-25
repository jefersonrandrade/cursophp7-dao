<?php

require_once("config.php");

//Exibe um cadastro
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Exibe uma lista de cadastros
//$lista = Usuario::getList();
//echo json_encode($lista);

//Exibe uma busca por um termo 
//dos itens cadastrados.
$search = Usuario::search("je");
echo json_encode($search);

?>