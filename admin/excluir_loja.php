<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';

$contato = new Contato();

if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$contato->excluirPorIdloja($id);
}
	header("Location: index_loja.php");

?>]