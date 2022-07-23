<?php
	//Recuperar datos
	//Hacerlo con el numero de licencia
	include("Conexion.php");
	$Con=Conectar();
	$SQL = "SELECT Id FROM conductores WHERE Nombre='Juan'";
	$Resultado = Consultar($Con,$SQL);
	$Fila = mysqli_fetch_row($Resultado);
	Cerrar($Con);
	$Codigo = $Fila[0];
	
	//Codigo de barras
	$filePath ="Codigos/$Codigo.png";
	$texto = $Codigo;
	$size = 50;
	$Tipo = "Code128";
	$orientacion = "Horizontal";
	$Imprimir = true;

	include("barcode.php");
	//print("<img src ='barcode.php?text=$Texto&print=$Imprimir'/>");
	barcode( $filePath, $texto, $size, $orientacion, $Tipo, $Imprimir);

?>