<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';

$contato = new Contato();

if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$contato->excluirPorIdrepresentante($id);
}
	header("Location: index_representante.php");

?>]