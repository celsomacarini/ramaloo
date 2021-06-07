<?php

  session_start();
   if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
include '../classes/ramal.class.php';
    include '../assets/target/header.php';
  $contato = new Contato(); 
?>
<table class="table table-striped table-dark" id="tabela">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Região</th>
      <th scope="col">Telefone</th>
      <th scope="col">Rota</th>
      <th scope="col">E-mail</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">CEP</th>
      <th scope="col">Cidade</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      </tr>
  </thead>
  <tbody>
    <?php
    $lista = $contato->getAlltecnico();
    foreach ($lista as $item): 
    ?>
    <tr>
      <th scope="col"><?php echo $item ['nome']; ?></th>
      <th scope="col"><?php echo $item ['regiao']; ?></th>
      <th scope="col"><?php echo $item ['empresarial']; ?></th>
      <th scope="col"><?php echo $item ['rota']; ?></th>
      <th scope="col"><?php echo $item ['email']; ?></th>
      <th scope="col"><?php echo $item ['endereco']; ?></th>
      <th scope="col"><?php echo $item ['bairro']; ?></th>
      <th scope="col"><?php echo $item ['cep']; ?></th>
      <th scope="col"><?php echo $item ['cidade']; ?></th>
      <th scope="col"><a class="btn btn-outline-primary" href="editar_tecnico.php?id=<?php echo $item ['id']; ?>" role="button">Editar</a></th>
      <th scope="col"><a class="btn btn-outline-danger" href="excluir_tecnico.php?id=<?php echo $item ['id']; ?>" role="button">Excluir</a></th>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
	<script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
<?php
include '../assets/target/footer.php';
?>  