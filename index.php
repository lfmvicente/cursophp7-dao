<?php

require_once ("config.php");

//carrega 1 usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

//INSERT
//$aluno = new Usuario("aluna", "4545");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(1);

$usuario->update("professor", "prof");
echo $usuario;


?>