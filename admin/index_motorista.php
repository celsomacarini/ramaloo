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
		<th scope="col">Telefone</th>
		<th scope="col">Placa</th>
		<th scope="col">Editar</th>
		<th scope="col">Excluir</th>
				
	</tr>
	</thead>
	<tbody>
<?php
$lista = $contato->getAllmotorista();
foreach ($lista as $item): 
?>
	<tr>
		<th scope="col"><?php echo $item ['nome']; ?></th>
		<th scope="col"><?php echo $item ['telefone']; ?></th>
	<th scope="col"><?php echo $item ['placa']; ?></th>
	<th scope="col"><a class="btn btn-outline-primary" href="editar_motorista.php?id=<?php echo $item ['id']; ?>" role="button">Editar</a></th>
	<th scope="col"><a class="btn btn-outline-danger" href="excluir_motorista.php?id=<?php echo $item ['id']; ?>" role="button">Excluir</a></th>
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