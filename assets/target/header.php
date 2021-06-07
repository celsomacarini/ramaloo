<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<script src="../assets/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="../assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../assets/js/jquery.quicksearch.js" type="text/javascript"></script>
<link rel="icon" href="../assets/img/telefone2.ico" />
<title>Telefones</title>
</head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href=administrativo.php>Pormade</a>
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
          <a class="btn btn-success" href="index_motorista.php">Motoristas</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_instalador.php">Instaladores 5 Estrelas</a>
        </li>&nbsp;
        <li class="nav-item">
          <div class="dropdown">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
               Imprimir Relatórios
             </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../pdf/pdf.administrativo.php" target="_blank">Administrativo</a>
                <a class="dropdown-item" href="../pdf/pdf.vendedores.php" target="_blank">Vendedores</a>
                <a class="dropdown-item" href="../pdf/pdf.representante.php" target="_blank">Representantes</a>
                <a class="dropdown-item" href="../pdf/pdf.tecnico.php" target="_blank">Técnicos</a>
                <a class="dropdown-item" href="../pdf/pdf.loja.php" target="_blank">Showroom</a>
                <a class="dropdown-item" href="../pdf/pdf.franquia.php" target="_blank">Franquias</a>
                <a class="dropdown-item" href="../pdf/pdf.motorista.php" target="_blank">Motoristas</a>
              </div>
          </div>
         </li>&nbsp;
         <li class="nav-item">
                    <div class="dropdown">
            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
               Adicionar
             </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../admin/adicionar_administrativo.php">Administrativo</a>
                <a class="dropdown-item" href="../admin/adicionar_vendedor.php">Vendedores</a>
                <a class="dropdown-item" href="../admin/adicionar_representante.php">Representantes</a>
                <a class="dropdown-item" href="../admin/adicionar_tecnico.php">Técnicos</a>
                <a class="dropdown-item" href="../admin/adicionar_loja.php">Showroom</a>
                <a class="dropdown-item" href="../admin/adicionar_franquia.php">Franquias</a>
                <a class="dropdown-item" href="../admin/adicionar_motorista.php">Motoristas</a>  
              </div>
          </div>
         </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-4" name="consulta" id="txt_consulta" type="text" placeholder="Pesquisar..." aria-label="Search">
        <a class="btn btn-outline-success my-2 my-sm-0" href="sair.php">Sair</a>
      </form>
    </div>
  </nav><br><br>