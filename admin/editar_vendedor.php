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

  $info = $contato->getInfovendedor($id);

  if(empty($info['id'])){
    header("Location: index_vendedores.php");
    exit;
  }
  }else{
    header("Location: index_vendedores.php");
    exit;
  }
?>
<form method="POST" action="editar_vendedor_submit.php">
  <div class="container">
  <div class="form-group">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>" />
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $info['nome']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ragião</label>
    <input type="text" class="form-control" name="regiao" placeholder="Região" value="<?php echo $info['regiao']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $info['telefone']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota" placeholder="Rota" value="<?php echo $info['rota']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo $info['email']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $info['endereco']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Bairro</label>
    <input type="text" class="form-control" name="bairro" placeholder="Bairro" value="<?php echo $info['bairro']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">CEP</label>
    <input type="text" class="form-control" name="cep" placeholder="CEP" value="<?php echo $info['cep']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="<?php echo $info['cidade']; ?>" >
  </div>
    <input class="btn btn-primary" type="submit" value="Editar">
    <a href="index_vendedores.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  