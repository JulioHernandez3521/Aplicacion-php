<?php
	//Recuperar datos
	//Hacerlo con el numero de licencia
	include("Conexion.php");
	$Con=Conectar();
	$SQL = "SELECT * FROM conductores WHERE Nombre='Juan'";
	$Resultado = Consultar($Con,$SQL);
	$Fila = mysqli_fetch_row($Resultado);
	Cerrar($Con);
	$Text = $Fila[0].$Fila[1].$Fila[2].$Fila[3];
	
	//Codigo QR
	require "phpqrcode/qrlib.php";
	
	$filename ="Codigos/QR2.png";
	$tamano = 5;
	$level = "L";
	$framSize= 3;

	QRcode::png($Text,$filename,$level,$tamano,$framSize)

?>