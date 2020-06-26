<?php
	 
	 $nota1 = $_GET["n1"];
	 $nota2 = $_GET["n2"];

	 $media = ($nota1 + $nota2) / 2;

	 if ($media >= 6){
	 	echo "A média entre $nota1 e $nota2 é igual a $media.<br/> Situação do aluno: Aprovado";
	 }else{
	 	if ($media >= 5 && $media < 6){
	 		echo "A média entre $nota1 e $nota2 é igual a $media.<br/> Situação do aluno: Recuperação";
	 	}else{
	 		echo "A média entre $nota1 e $nota2 é igual a $media.<br/> Situação do aluno: Reprovado";
	 	}
	 }

?>
	<a href="aula10.php">Voltar</a>