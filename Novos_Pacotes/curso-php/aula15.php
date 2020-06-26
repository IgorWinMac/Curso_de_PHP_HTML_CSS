<?php
	$ds = $_GET["num"];

	switch ($ds) {
		case '1':
			$dia = "Domingo";
			echo "Esse número corresponde a $dia e não tem aula";
			break;
		case '2':
			$dia = "Segunda";
			echo "Esse número corresponde a $dia";
			break;
		case '3':
			$dia = "Terça";
			echo "Esse número corresponde a $dia";
			break;
		case '4':
			$dia = "Quarta";
			echo "Esse número corresponde a $dia";
			break;
		case '5':
			$dia = "Quinta";
			echo "Esse número corresponde a $dia";
			break;
		case '6':
			$dia = "Sexta";
			echo "Esse número corresponde a $dia";
			break;
		case '7':
			$dia = "Sábado";
			echo "Esse número corresponde a $dia e não tem aula";
			break;
		default:
			$dia = "Inválido";
			echo "Dia $dia";
			break;
	}

?>
	<a href="aula14.php">Voltar</a>