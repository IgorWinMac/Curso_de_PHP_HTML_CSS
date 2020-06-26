

<?php

	$nome = $_GET["nome"];
	$ano = $_GET["ano"];
	$idade = date(Y) - $ano;

	if ($idade >=18){
		echo "$nome você pode dirigir e votar!<br/>";
	}else{
		echo "$nome você NÃO pode dirigir e NÃO pode votar!</br>";
	}

?>
	<a href="aula07.php">Voltar</a>