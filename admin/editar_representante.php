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

  $info = $contato->getInforepresentante($id);

  if(empty($info['regiao'])){
    header("Location: index_representante.php");
    exit;
  }
  }else{
    header("Location: index_representante.php");
    exit;
  }
?>
  <form method="POST" action="editar_representante_submit.php">
  <div class="container">
    <div class="form-group">
          <div class="form-group">
       <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>">
    <div class="form-group">
    <label for="exampleFormControlInput1">Região</label>
    <input type="text" class="form-control" name="regiao" value="<?php echo $info['regiao']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Empresa</label>
    <input type="text" class="form-control" name="empresa" value="<?php echo $info['empresa']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contato</label>
    <input type="text" class="form-control" name="contato_adv" value="<?php echo $info['contato_adv']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular</label>
    <input type="text" class="form-control" name="celular" value="<?php echo $info['celular']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Escritório</label>
    <input type="text" class="form-control" name="escritorio" value="<?php echo $info['escritorio']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota" <?php echo $info['rota']; ?>>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $info['email']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $info['endereco']; ?>">
  </div>
    <input class="btn btn-primary" type="submit" value="Editar">
    <a href="index_representante.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
