<?php
  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
include '../assets/target/header.php';
  $contato = new Contato(); 
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#fixoempresarial').mask('(00)0000-0000');
    $('#celularempresarial').mask('(00)00000-0000');
    $('#celularparticular').mask('(00)00000-0000');
  })
</script>
<br>
  <form name="formCadastro" method="POST" action="adicionar_administrativo_submit.php">
  <div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Setor</label>
    <input type="text" class="form-control" name="setor">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ramal</label>
    <input type="text" class="form-control" name="ramal">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fixo Empresarial</label>
    <input type="text" class="form-control" name="empresarial" id="fixoempresarial">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular Empresarial</label>
    <input type="text" class="form-control" name="celular" id="celularempresarial">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular Particular</label>
    <input type="text" class="form-control" name="residencial" id="celularparticular">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="administrativo.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
