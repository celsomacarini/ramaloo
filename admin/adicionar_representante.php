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
  <form method="POST" action="adicionar_representante_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Região</label>
    <input type="text" class="form-control" name="regiao">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Empresa</label>
    <input type="text" class="form-control" name="empresa">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contato</label>
    <input type="text" class="form-control" name="contato_adv">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular</label>
    <input type="text" class="form-control" name="celular">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Escritório</label>
    <input type="text" class="form-control" name="escritorio">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="index_representante.php" class="btn btn-info" role="button">Voltar</a>    
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
