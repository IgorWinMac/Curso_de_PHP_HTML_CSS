<h3>Tabuada</h3>

<?php

$n1 = 20;
$n2 = 15;
$s = $n1 + $n2;
$m = $n1 * $n2;
$d = $n1 / $n2;
$sub = $n1 - $n2;
$mod = $n1 % $n2;

echo " A soma entre $n1 e $n2 é igual a $s</br>";
echo "A multiplicacao entre $n1 e $n2 é igual a $m</br>";
echo " A divisao entre $n1 e $n2 e igual a $d</br>";
echo " A subtracao entre $n1 e $n2 igual a $sub</br>";
echo " A resto entre $n1 e $n2 é igual a $mod</br>";
echo "O valor de $n2 em moeda é R$" .number_format($n2,2,",",".");

?>