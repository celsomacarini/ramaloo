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

  $info = $contato->getInfotecnico($id);

  if(empty($info['nome'])){
    header("Location: index_tecnico.php");
    exit;
  }
  }else{
    header("Location: index_tecnico.php");
    exit;
  }
?>
  <form method="POST" action="editar_tecnico_submit.php">
  <div class="container">
    <div class="form-group">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>" />
  </div>
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $info['nome']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Região</label>
    <input type="text" class="form-control" name="regiao" value="<?php echo $info['regiao']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="empresarial" value="<?php echo $info['empresarial']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota" value="<?php echo $info['rota']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="text" class="form-control" name="email" value="<?php echo $info['email']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $info['endereco']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Bairro</label>
    <input type="text" class="form-control" name="bairro" value="<?php echo $info['bairro']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">CEP</label>
    <input type="text" class="form-control" name="cep" value="<?php echo $info['cep']; ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade" value="<?php echo $info['cidade']; ?>">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="index_tecnico.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
