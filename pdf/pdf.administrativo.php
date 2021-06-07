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
		<table border="1">
		  <thead style='border:2px solid black;'>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Setor</th>
		      <th scope="col">Ramal</th>
		      <th scope="col">Rota</th>
		      <th scope="col">Empresarial</th>
   		      <th scope="col">Celular</th>
   		      <th scope="col">Residencial</th>
   		      <th scope="col">E-Mail</th>
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