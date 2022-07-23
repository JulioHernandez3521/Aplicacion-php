<?php
	$Numero=$_POST['Numero'];
	$Tipo=$_POST['Tipo'];
	$FechaExp=$_POST['FechaExpedicion'];
	$Valido=$_POST['Valido'];
    $Conductor=$_POST['Conductor'];
    
    

	print("Numero= ".$Numero."<br>");
    print("Tipo= ".$Tipo."<br>");
    print("FechaExpedicion= ".$FechaExp."<br>");
	print("Valido=" .$Valido."<br>");
	print("Conductor=".$Conductor."<br>");
   
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO licencias VALUES ($Numero,'$Tipo','$FechaExp','$Valido','$Conductor')";


    $Resultado=Consultar($Con,$SQL);
    print($Resultado);
    Cerrar($Con);


?>