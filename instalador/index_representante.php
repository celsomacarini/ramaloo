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
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href=index.php>Pormade</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-success" href="administrativo.php">Administrativo <span class="sr-only">(current)</span></a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_vendedores.php">Vendedores</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_representante.php">Representantes</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_tecnico.php">Técnicos</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_loja.php">Showroom</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_franquia.php">Franquias</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_motorista.php">Motoristas SBA</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index.php">Instaladores 5 Estrelas</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" name="consulta" id="txt_consulta" type="text" placeholder="Pesquisar..." aria-label="Search">
        <a class="btn btn-outline-success my-2 my-sm-0" href="sair.php">Sair</a>
      </form>
    </div>
  </nav>
</header><br><br>
<table class="table table-striped table-dark" id="tabela">
  <thead>
    <tr>
      <th scope="col">Região</th>
      <th scope="col">Empresa</th>
      <th scope="col">Contato</th>
      <th scope="col">Celular</th>
      <th scope="col">Escritório</th>
      <th scope="col">Rota</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      </tr>
  </thead>
  <tbody>
    <?php
    $lista = $contato->getAllrepresentante();
    foreach ($lista as $item): 
    ?>
    <tr>
      <th scope="col"><?php echo $item ['regiao']; ?></th>
      <th scope="col"><?php echo $item ['empresa']; ?></th>
      <th scope="col"><?php echo $item ['contato_adv']; ?></th>
      <th scope="col"><?php echo $item ['celular']; ?></th>
      <th scope="col"><?php echo $item ['escritorio']; ?></th>
      <th scope="col"><?php echo $item ['rota']; ?></th>
      <th scope="col"><?php echo $item ['email']; ?></th>
      <th scope="col"><?php echo $item ['endereco']; ?></th>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
	<script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
<?php
include '../assets/target/footer.php';
?>  