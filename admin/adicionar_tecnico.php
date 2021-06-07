<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
include '../assets/target/header.php';
  $contato = new Contato(); 
?>
<br>
  <form method="POST" action="adicionar_tecnico_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Região</label>
    <input type="text" class="form-control" name="regiao">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Empresarial</label>
    <input type="text" class="form-control" name="empresarial">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Bairro</label>
    <input type="text" class="form-control" name="bairro">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">CEP</label>
    <input type="text" class="form-control" name="cep">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade">
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
