<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
include '../assets/target/header.php';

$contato = new Contato();
 if(!empty($_GET['id'])){
  $id = $_GET['id'];

  $info = $contato->getInfomotorista($id);

  if(empty($info['id'])){
    header("Location: index_motorista.php");
    exit;
  }
  }else{
    header("Location: index.php");
    exit;
  }
?>
  <form name="formCadastro" method="POST" action="../admin/editar_motorista_submit.php">
  <div class="container">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>" />
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $info['nome']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="<?php echo $info['telefone']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Placa</label>
    <input type="text" class="form-control" name="placa" value="<?php echo $info['placa']; ?>" />
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Editar">
    <a href="index_motorista.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
