<?php
	
	$idade = 40;

	if ($idade >= 16 && $idade < 18){
		echo "Você está em fase opcional";
	}else{
		if ($idade >= 18 && $idade <= 60){
			echo "Você está em fase obrigatória";
		}else{
			echo "Você não se enquadra em nenhuma das fase";
		}
	}
?>