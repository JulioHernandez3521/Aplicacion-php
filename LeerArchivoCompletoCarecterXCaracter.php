<?php
	$Manejador = fopen("DATOS.txt", "r");
	while(false !== ($C = fgetc($Manejador))){
		$Salto = nl2br($C);
		print($Salto);
	}
	fclose($Manejador);
?>