<?php
	$Manejador = fopen("DATOS.txt", "r");
	$Linea = fgets($Manejador);
	print($Linea);
	fclose($Manejador);
?>