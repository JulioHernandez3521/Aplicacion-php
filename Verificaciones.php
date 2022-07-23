<?php
	$ID=$_REQUEST['ID'];
	$Permiso=$_REQUEST['Permiso'];
	$Dictamen=$_REQUEST['Dictamen'];    
    $Tipo=$_REQUEST['Tipo'];    
    $Placa=$_REQUEST['Placa'];    
    
	print("Placa= ".$Placa."<br>");
    print("ID= ".$ID."<br>");
    print("Permiso= ".$Permiso."<br>");
	print("Dictamen=" .$Dictamen."<br>");
    print("Tipo=" .$Tipo."<br>");

    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO verificaiones (ID,Permiso,Dictamen,Tipo,Placa)VALUES ($ID,'$Permiso','$Dictamen','$Tipo','$Placa')";


        $Resultado=Consultar($Con,$SQL);
        print($Resultado);
        Cerrar($Con);
?>