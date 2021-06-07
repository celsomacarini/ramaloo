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
  <form name="formCadastro" method="POST" action="adicionar_motorista_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Placa</label>
    <input type="text" class="form-control" name="placa">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="site.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
