<?php 

	$primeiroNome = $_POST['primeiroNome'];
	$segundoNome = $_POST['segundoNome'];
	$escolhaPets = $_POST['escolhaPets'];


	echo($primeiroNome . " - " 
		. $segundoNome ." - " 
		. $escolhaPets);

	echo '<br><br><a href="../index.php">Voltar</a>';

	//header("location: ../index.php")
 ?>