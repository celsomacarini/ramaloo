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
	<th scope="col">Setor</th>
	<th scope="col">Ramal</th>
	<th scope="col">Rota</th>
	<th scope="col">Fixo Empresarial</th>
	<th scope="col">Celular Empresarial</th>
	<th scope="col">Celular Particular</th>
	<th scope="col">E-Mail</th>
	<th scope="col">Editar</th>
	<th scope="col">Excluir</th>
</tr>
</thead>
<tbody>
<?php
$lista = $contato->getAll();
foreach ($lista as $item): 
?>
<tr>
	<th scope="col"><?php echo $item ['nome']; ?></th>
	<th scope="col"><?php echo $item ['setor']; ?></th>
	<th scope="col"><?php echo $item ['ramal']; ?></th>
	<th scope="col"><?php echo $item ['rota']; ?></th>
	<th scope="col"><?php echo $item ['empresarial']; ?></th>
	<th scope="col"><?php echo $item ['celular']; ?></th>
	<th scope="col"><?php echo $item ['residencial']; ?></th>
	<th scope="col"><?php echo $item ['email']; ?></th>
	<th scope="col"><a class="btn btn-outline-primary" href="editar_administrativo.php?id=<?php echo $item ['id']; ?>" role="button">Editar</a></th>
	<th scope="col"><a class="btn btn-outline-danger" href="excluir_administrativo.php?id=<?php echo $item ['id']; ?>" role="button">Excluir</a></th>
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