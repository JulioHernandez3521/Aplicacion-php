<?php
	//Obtinen un id y lo borra de la base de datos
	$Id=$_GET['Numero'];
	include("Conexion.php");
	$Con=Conectar();
	$SQL="DELETE FROM licencias WHERE Numero='$Id'";
	$Resultado=Consultar($Con,$SQL);
	printf("Registros borrados: %d\n", mysqli_affected_rows($Con));
	//print($Resultado);
	Cerrar($Con);

?>