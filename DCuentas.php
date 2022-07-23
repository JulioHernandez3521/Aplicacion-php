<?php
	//Obtinen un id y lo borra de la base de datos
	$username=$_GET['username'];
	include("Conexion.php");
	$Con=Conectar();
	$SQL="DELETE FROM cuentas WHERE username = '$username'";
	$Resultado=Consultar($Con,$SQL);
	printf("Registros borrados: %d\n", mysqli_affected_rows($Con));
	//print($Resultado);
	Cerrar($Con);

?>