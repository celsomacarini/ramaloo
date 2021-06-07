<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['id'])){
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$placa = $_POST['placa'];
	$id = $_POST['id'];
	
	$contato->editarmotorista($nome, $telefone, $placa, $id);
	
}
	header("Location: index_motorista.php");
?>