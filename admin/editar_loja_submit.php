<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['id'])){
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$atendimento = $_POST['atendimento'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$contato->editarloja($cidade, $estado, $endereco, $nome, $telefone, $atendimento, $email, $id);
	
	}
	header("Location: index_loja.php");
?>