<?php
	//Obtinen un id y lo borra de la base de datos
	$Id=$_GET['Placa'];
	include("Conexion.php");
	$Con=Conectar();
	$SQL="DELETE FROM vehiculos WHERE Placa='$Id'";
	$Resultado=Consultar($Con,$SQL);
	printf("Registros borrados: %d\n", mysqli_affected_rows($Con));
	//print($Resultado);
	Cerrar($Con);

?>