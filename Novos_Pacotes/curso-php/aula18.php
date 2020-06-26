<?php

	$ini = $_GET["ini"];
	$fin = $_GET["fin"];
	$inc = $_GET["inc"];

	while ($ini <= $fin) {
		echo "$ini<br/>";
		$ini = $ini + $inc;
	}

?>
	<a href="aula17.php">Voltar</a>