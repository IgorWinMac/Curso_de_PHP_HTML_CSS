<?php

	$cont = 0;
	$num = 7;
	$res= 0;

	do {
		$res = $num * $cont;
		echo "$num * $cont = $res<br/>";
		$cont = $cont + 1;
	} while ( $cont <= 10 );
	
?>