<?php

session_start();
include_once "../../class/DAO/documento.DAO.class.php";
include_once "../../class/DAO/usuario.DAO.class.php";
include_once "../../class/usuario.class.php";

$objDoc = new Documento_DAO();
$query = $objDoc->listarDocumentosProfessor($_SESSION['idUsuario']);


$nome = $_POST['nome'];
$login = $_POST['login'];
$senha  = $_POST['senha'];

$objusu = new Usuario();

$objusu->setNome($nome);
$objusu->setLogin($login);
$objusu->setSenha($senha);
$objusu->setProfessor(0);

$objusuDAO = new UsuarioDAO();
$retorno = $objusuDAO->inserir($objusu);
if($retorno)
    header("location:index.php?Ok");
else
    header("location:?error");

?>