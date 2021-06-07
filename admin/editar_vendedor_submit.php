<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['id'])){
	$nome = $_POST['nome'];
	$regiao = $_POST['regiao'];
	$telefone = $_POST['telefone'];
	$rota = $_POST['rota'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$id = $_POST['id'];
	$contato->editarvendedor($nome, $regiao, $telefone, $rota, $email, $endereco, $bairro, $cep, $cidade, $id);
	
	}
	header("Location: index_vendedores.php");
?>