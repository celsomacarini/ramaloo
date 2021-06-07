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
          <th scope="col">Região</th>
          <th scope="col">Empresa</th>
          <th scope="col">Contato</th>
          <th scope="col">ADV</th>
          <th scope="col">Celular</th>
          <th scope="col">Escritório</th>
          <th scope="col">Rota</th>
          <th scope="col">Email</th>
          <th scope="col">Endereço</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $lista = $contato->getAllrepresentante();
        foreach ($lista as $item): 
        ?>
        <tr>
          <th scope="col"><?php echo $item ['regiao']; ?></th>
          <th scope="col"><?php echo $item ['empresa']; ?></th>
          <th scope="col"><?php echo $item ['contato_adv']; ?></th>
          <th scope="col"><?php echo $item ['adv']; ?></th>
          <th scope="col"><?php echo $item ['celular']; ?></th>
          <th scope="col"><?php echo $item ['escritorio']; ?></th>
          <th scope="col"><?php echo $item ['rota']; ?></th>
          <th scope="col"><?php echo $item ['email']; ?></th>
          <th scope="col"><?php echo $item ['endereco']; ?></th>          
       </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php
    $html = ob_get_contents();
    ob_end_clean();

    require '../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
    $mpdf->AddPage('L');
    $mpdf->WriteHTML($html); 
    $mpdf->Output(); 

    ?>

<?php
include '../assets/target/footer.php';
?>    