<?php
	$Manejador = fopen("DATOS.txt", "r");
	$Manejador2 = fopen("DATOS(2).txt", "a+");
	$Linea = fgets($Manejador);
	while(!feof($Manejador)){
		fputs($Manejador2, $Linea);
		$Salto = nl2br($Linea);
		print($Salto);
		$Linea = fgets($Manejador);
	}

	
	fclose($Manejador);
	fclose($Manejador2);
	
?>
