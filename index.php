<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ke");
//echo json_encode($search);


//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("keke","87654323467");
//echo $usuario;

$aluno= new Usuario("aluno","@lun0");
$aluno->insert();
echo $aluno;

?>