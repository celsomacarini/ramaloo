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
		      <th scope="col">Cidade</th>
		      <th scope="col">UF</th>
		      <th scope="col">Quantidade De instaladores</th>
          <th scope="col">Instalador de...</th>
   		   </tr>
		  </thead>
		  <tbody>
      <?php
		    $lista = $contato->getAllInstalador();
		    foreach ($lista as $item): 
		    ?>
		    <tr>
		      <th scope="col"><?php echo $item ['cidade']; ?></th>
		      <th scope="col"><?php echo $item ['uf']; ?></th>
		      <th scope="col"><?php echo $item ['quantidade_instalador']; ?></th>
          <th scope="col"><?php echo $item ['especialidade']; ?></th>
   		   </tr>
			<?php endforeach; ?>

		</table>
	<script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
<?php
include '../assets/target/footer.php';
?>  