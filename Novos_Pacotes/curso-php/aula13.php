<?php
	$n = $_GET["num"];
	$o = $_GET["oper"];

	switch ($o) {
		case '1':
			$r = $n * $n;
			break;
		case '2':
			$r = $n * $n * $n;
			break;
		case '3':
			$r = sqrt($n);
			break;
		default:
			$r = "Erro";
			break;
	}
	echo "O resultado da sua escolha é $r";
?>
	<a href="aula12.php">Voltar</a>