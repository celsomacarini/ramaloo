<?php
	session_start();
	echo "Bem vindo (a): ". $_SESSION['usuarioNome'];	
?>
<br>
<a href="sair.php">Sair</a>