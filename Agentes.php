<?php
	$ID=$_GET['ID'];
	$Nombre=$_GET['Nombre'];
	$Rfc=$_GET['Rfc'];
	$Puesto=$_GET['Puesto'];    

	print("ID= ".$ID."<br>");
    print("Nombre= ".$Nombre."<br>");
    print("Rfc= ".$Rfc."<br>");
	print("Puesto=" .$Puesto."<br>");
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO agentes (ID,Nombre,Rfc,Puesto)VALUES ($ID,'$Nombre','$Rfc','$Puesto')";


        $Resultado=Consultar($Con,$SQL);
        print($Resultado);
        Cerrar($Con);
?>