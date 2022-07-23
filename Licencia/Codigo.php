<?php

	function Nombre(){
	
			include('../Conexion.php');
		    $con = Conectar();
		    $sql = ("SELECT l.Numero, c.Nombre, c.Observacione, l.FechaExp
		    FROM licencias l, conductores c 
		    WHERE l.Numero =  1
		    AND c.id = l.Conductor;
		    ");
		    $resultado = Consultar($con, $sql);
		    $fila = mysqli_fetch_row($resultado);
			$codigo = $fila[0];
			return $codigo;

	}
	function Codigo()
		{
			include('../Conexion.php');
		    $con = Conectar();
		    $sql = ("SELECT l.Numero, c.Nombre, c.Observacione, l.FechaExp
		    FROM licencias l, conductores c 
		    WHERE l.Numero =  1
		    AND c.id = l.Conductor;
		    ");
		    $resultado = Consultar($con, $sql);
		    $fila = mysqli_fetch_row($resultado);
		    $codigo = $fila[0];
		   
			//Codigo de barras
			$filePath ="Codigos/$codigo.png";
			$texto = $Codigo;
			$size = 50;
			$Tipo = "Code128";
			$orientacion = "Horizontal";
			$Imprimir = true;

			include("../barcode.php");
			barcode( $filePath, $texto, $size, $orientacion, $Tipo, $Imprimir);
			return $codigo;
			
		}	

?>