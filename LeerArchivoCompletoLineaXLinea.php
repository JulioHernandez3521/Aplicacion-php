<?php
	$Manejador = fopen("DATOS.txt", "r");
	while(!feof($Manejador)){
		$Linea = fgets($Manejador);
		$Salto = nl2br($Linea);
		print($Salto);
	}
	fclose($Manejador);
?>