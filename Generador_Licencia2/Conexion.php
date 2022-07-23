<?php
	function Conectar(){
		$Datos= parse_ini_file("../ConfiguracionBD.ini");
		
		$Servidor= $Datos['Servidor'];
		$Usuario=$Datos['Usuario'];
		$Password=$Datos['Password'];
		$BD=$Datos['BD'];
		$Con = mysqli_connect($Servidor,$Usuario,$Password,$BD);
		return $Con;
	}
	//Devuelve 0 1 error o una relacion 
	function Consultar($Con,$SQL){
		$Resultado = mysqli_query($Con,$SQL) or die(mysqli_error($Con));
		return $Resultado;
	}
	function Cerrar($Con){
		mysqli_close($Con);
	}
?>