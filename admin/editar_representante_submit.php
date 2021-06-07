<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['id'])){
	$regiao = $_POST['regiao'];
	$empresa = $_POST['empresa'];
	$contato_adv = $_POST['contato_adv'];
	$celular = $_POST['celular'];
	$escritorio = $_POST['escritorio'];
	$rota = $_POST['rota'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$id = $_POST['id'];
	
	$contato->editarrepresentante($regiao, $empresa, $contato_adv, $celular, $escritorio, $rota, $email, $endereco, $id);
	
}
	header("Location: index_representante.php");
?>