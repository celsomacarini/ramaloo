<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['cidade'])){
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$quantidade_instalador = $_POST['quantidade_instalador'];
    $especialidade = $_POST['especialidade'];

	$contato->adicionarInstalador($cidade, $uf, $quantidade_instalador, $especialidade);
	header("Location: index.php");
}else{
	header("Location: index.php");
}

?>