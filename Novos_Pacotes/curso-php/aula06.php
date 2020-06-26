<?php

$desc = 10;
$preco = 1000;
$produto = 0;

$produto = $preco + (10/100 * $preco);

echo "O valor final do produto custa R$ " .number_format($produto,2,".",",");

?>

<?php

$anoAnterior = 0;
$anoAtual = 2020;

$anoAnterior = $anoAtual - 1;

echo "O ano atual é $anoAtual e  ano anterior é $anoAnterior";


?>

<?php
	$num = $_POST["v"];
	echo "O valor recebido foi $num";
?>