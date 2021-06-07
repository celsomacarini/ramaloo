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

  $info = $contato->getInfo($id);

  if(empty($info['id'])){
    header("Location: index.php");
    exit;
  }
  }else{
    header("Location: index.php");
    exit;
  }
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#fixoempresarial').mask('(00)0000-0000');
    $('#celularempresarial').mask('(00)00000-0000');
    $('#celularparticular').mask('(00)00000-0000');
  })
</script>
</script>
  <form name="formCadastro" method="POST" action="../admin/editar_administrativo_submit.php">
  <div class="container">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $info['id']; ?>" />
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $info['nome']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Setor</label>
    <input type="text" class="form-control" name="setor" value="<?php echo $info['setor']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ramal</label>
    <input type="text" class="form-control" name="ramal" value="<?php echo $info['ramal']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota" value="<?php echo $info['rota']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fixo Empresarial</label>
    <input type="text" class="form-control" name="empresarial" id="fixoempresarial" value="<?php echo $info['empresarial']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular Empresarial</label>
    <input type="text" class="form-control" name="celular" id="celularempresarial" value="<?php echo $info['celular']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular Residencial</label>
    <input type="text" class="form-control" name="residencial" id="celularparticular" value="<?php echo $info['residencial']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $info['email']; ?>" /><br>
    <input class="btn btn-primary" type="submit" value="Editar">
    <a href="administrativo.php" class="btn btn-info" role="button">Voltar</a>
  </div>
  </form>
</header>
</body>
<?php
include '../assets/target/footer.php';
?>  
