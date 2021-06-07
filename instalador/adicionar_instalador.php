<?php

  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
  include '../classes/ramal.class.php';
  $contato = new Contato(); 
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="js/jquery.mask.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.quicksearch.js" type="text/javascript"></script>
<link rel="icon" href="img/telefone2.ico" />
<title>Telefones</title>
</head>
<body class="d-flex flex-column h-100">
<br>
  <form name="formCadastro" method="POST" action="adicionar_instalador_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Uf</label>
    <input type="text" class="form-control" name="uf">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Quantidade De Instaladores</label>
    <input type="text" class="form-control" name="quantidade_instalador">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Especialidade</label>
    <input type="text" class="form-control" name="especialidade">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="index.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>