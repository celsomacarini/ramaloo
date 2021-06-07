<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
  $contato = new Contato(); 

if(!empty($_POST['nome'])){
	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$ramal = $_POST['ramal'];
	$rota = $_POST['rota'];
	$empresarial = $_POST['empresarial'];
	$celular = $_POST['celular'];
	$residencial = $_POST['residencial'];
	$email = $_POST['email'];

	$contato->adicionar($nome, $setor, $ramal, $rota, $empresarial, $celular, $residencial, $email);
	header("Location: administrativo.php");
}else{
	header("Location: administrativo.php");
}

?>