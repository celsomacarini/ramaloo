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

  $info = $contato->getInfofranquia($id);

  if(empty($info['cidade'])){
    header("Location: index_loja.php");
    exit;
  }
  }else{
    header("Location: index_loja.php");
    exit;
  }
?>
  <form method="POST" action="editar_franquia_submit.php">
  <div class="container">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>" />
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade" value="<?php echo $info['cidade']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Estado</label>
    <input type="text" class="form-control" name="estado" value="<?php echo $info['estado']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Endereco</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $info['endereco']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $info['nome']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="<?php echo $info['telefone']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Atendimento</label>
    <input type="text" class="form-control" name="atendimento" value="<?php echo $info['atendimento']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $info['email']; ?>">
  </div>
    <input class="btn btn-primary" type="submit" value="Editar">
    <a href="index_loja.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
