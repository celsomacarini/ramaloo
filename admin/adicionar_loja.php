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
  <form method="POST" action="adicionar_loja_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" name="cidade">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Estado</label>
    <input type="text" class="form-control" name="estado">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Horário de Atendimento</label>
    <input type="text" class="form-control" name="atendimento">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="index_loja.php" class="btn btn-info" role="button">Voltar</a>    
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
