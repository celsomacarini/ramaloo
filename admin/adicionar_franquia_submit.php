<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['cidade'])){
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$atendimento = $_POST['atendimento'];
	$email = $_POST['email'];
	
	$contato->adicionarfranquia($cidade, $estado, $endereco, $nome, $telefone, $atendimento, $email);
	header("Location: index_franquia.php");
}else{
	header("Location: index_franquia.php");
}

?>