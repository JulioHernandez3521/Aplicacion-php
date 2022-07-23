<?php
	$Manejador = fopen("DATOS.txt", "a");
	fputs($Manejador," Carrera: Licenciatura");
	fclose($Manejador);
?>