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
//$search = Usuario::search("je");
//echo json_encode($search);

//Carrega um usuario usando um login e senha
$usuario = new Usuario();
$usuario->login("JEFERSON", "159753");
echo $usuario;


?>