<?php
include '../classes/ramal.class.php';

	session_start();
	 if(!$_SESSION['usuarioId']){
    header('location:index.php');
  };
  

	echo "Bem vindo (a): ". $_SESSION['usuarioNome'];

	$contato = new Contato();	
?>
		<?php
		ob_start();
		?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
		<table class="table table-striped table-dark" id="tabela">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Região</th>
		      <th scope="col">ADV</th>
		      <th scope="col">Telefone</th>
		      <th scope="col">Rota</th>
          <th scope="col">E-mail</th>
          <th scope="col">Endereço</th>
          <th scope="col">Bairro</th>
          <th scope="col">CEP</th>
          <th scope="col">Cidade</th>
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
          <th scope="col"><?php echo $item ['agendador']; ?></th>
	      <th scope="col"><?php echo $item ['empresarial']; ?></th>
	      <th scope="col"><?php echo $item ['rota']; ?></th>
          <th scope="col"><?php echo $item ['email']; ?></th>
          <th scope="col"><?php echo $item ['endereco']; ?></th>
          <th scope="col"><?php echo $item ['bairro']; ?></th>
          <th scope="col"><?php echo $item ['cep']; ?></th>
          <th scope="col"><?php echo $item ['cidade']; ?></th>
	    </tr>
		<?php endforeach; ?>
		  </tbody>
		</table>
		<?php
		$html = ob_get_contents();
		ob_end_clean();

		require '../vendor/autoload.php';
		$mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
		$mpdf->AddPage('L');
		$mpdf->WriteHTML($html); 
		$mpdf->Output(); 

		?>

<?php
include '../assets/target/footer.php';
?>		