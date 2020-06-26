<?php

$valor = $_GET["valor"];
$cont = 1;

	do {
		$cont = $cont * $valor;
		$valor = $valor - 1;
	} while ($valor >= 1);
	echo "O fatorial é $cont";

?>

<a href="aula22.php">Voltar</a>