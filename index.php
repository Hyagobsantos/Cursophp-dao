<?php

require_once("config.php");


//select basico de todos usuarios
//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadById(7);
//echo $root;


//carrega varios usuarios lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login, definindo pelo usuarios buscando 
//$search = Usuario::search("hy");
//echo json_encode($search);

//carraga um usuario usando o login e a senha validando 
//$usuario = new Usuario();
//$usuario->login("caio" ,"bicha");
//echo $usuario;

/*
//inseri dados com procedures/criando um novo usuario
$aluno = new Usuario("Aluno","@lun0");

//adicionando metodo construtor na classe usuario 
//$aluno->setDeslogin("Aluno");
//$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/

//consultando e alterando usuario
/*
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("Professor","!@##$");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

?>