<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['nome'])){
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$placa = $_POST['placa'];
	
	$contato->adicionarmotorista($nome, $telefone, $placa);
	header("Location: index_motorista.php");
}else{
	header("Location: index_motorista.php");
}

?>