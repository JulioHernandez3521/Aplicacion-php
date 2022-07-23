<?php
	$Manejador = fopen("DATOS.txt", "a+");
	$Linea = fgets($Manejador);
	print($Linea);
	fputs($Manejador, " Ultimo Acceso: 07/04/2020");
	fclose($Manejador);
?>