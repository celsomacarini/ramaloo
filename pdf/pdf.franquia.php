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
            <thead>
                <tr>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Horário de Atendimento</th>
                <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $lista = $contato->getAllFranquia();
                foreach ($lista as $item): 
                ?>
                <tr>
                <th scope="col"><?php echo $item ['cidade']; ?></th>
                <th scope="col"><?php echo $item ['estado']; ?></th>
                <th scope="col"><?php echo $item ['endereco']; ?></th>
                <th scope="col"><?php echo $item ['nome']; ?></th>
                <th scope="col"><?php echo $item ['telefone']; ?></th>
                <th scope="col"><?php echo $item ['atendimento']; ?></th>
                <th scope="col"><?php echo $item ['email']; ?></th>
                </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
		  </tbody>
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