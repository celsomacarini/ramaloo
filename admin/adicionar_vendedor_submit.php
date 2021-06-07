<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['nome'])){
	$nome = $_POST['nome'];
	$regiao = $_POST['regiao'];
	$telefone = $_POST['telefone'];
	$rota = $_POST['rota'];
	$email = $_POST['email'];
	$endereco =$_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];

	$contato->adicionarvendedor($nome, $regiao, $telefone, $rota, $email, $endereco, $bairro, $cep, $cidade);
	header("Location: index_vendedores.php");
}else{
	header("Location: index_vendedores.php");
}

?>