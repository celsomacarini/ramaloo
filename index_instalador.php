<?php
include 'classes/ramal.class.php';

$contato = new Contato();
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/js/jquery.quicksearch.js" type="text/javascript"></script>
<link rel="icon" href="assets/img/telefone2.ico" />
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
          <a class="btn btn-success" href="index.php">Administrativo <span class="sr-only">(current)</span></a>
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
          <a class="btn btn-success" href="index_instalador.php">Instaladores 5 Estrelas</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-danger" href="https://forms.monday.com/forms/6925ee15627f2469862bf10088964955?r=use" target="_blank">Solicitar Instalador</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" name="consulta" id="txt_consulta" type="text" placeholder="Pesquisar..." aria-label="Search">
        <a class="btn btn-outline-success my-2 my-sm-0" href="admin/index.php">Fazer Login</a>
      </form>
    </div>
  </nav>
</header><br><br>
		<table class="table table-striped table-dark" id="tabela">
		  <thead>
		    <tr>
		      <th scope="col">Cidade</th>
		      <th scope="col">UF</th>
		      <th scope="col">QTD Instaladores</th>
          <th scope="col">Portas</th>
          <th scope="col">Rodapé</th>
          <th scope="col">Piso Vinílico</th>
          <th scope="col">Esquadrias</th>
          <th scope="col">Papel De Parede</th>
          <th scope="col">Forro</th>

   		   </tr>
		  </thead>
		  <tbody>
      <?php
		    $lista = $contato->getAllInstalador();
		    foreach ($lista as $item): 
		    ?>
		    <tr>
		      <th scope="col"><?php echo $item ['cidade']; ?></th>
		      <th scope="col"><?php echo $item ['uf']; ?></th>
		      <th scope="col"><?php echo $item ['quantidade_instalador']; ?></th>
          <th scope="col"><?php echo $item ['portas']; ?></th>
          <th scope="col"><?php echo $item ['rodape']; ?></th>
          <th scope="col"><?php echo $item ['piso_vinilico']; ?></th>
          <th scope="col"><?php echo $item ['esquadrias']; ?></th>
          <th scope="col"><?php echo $item ['papeldeparede']; ?></th>
          <th scope="col"><?php echo $item ['forro']; ?></th>

   		   </tr>
			<?php endforeach; ?>

		</table>
<script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="">Pormade Portas TI</a>
        <p>Para atualizações de cadastro, favor ligar para o ramal 2121 e falar com a Ana Carla.</p>
 </div>
</footer>
    </body>
</html>