<?php
	$Placa=$_REQUEST['Placa'];
	$Marca=$_REQUEST['Marca'];
	$Modelo=$_REQUEST['Modelo'];
	$Color=$_REQUEST['Color'];    
    $NSerie=$_REQUEST['NSerie'];    
    $Puerta=$_REQUEST['Puerta'];    
    $Uso=$_REQUEST['Uso'];    
    $Origen=$_REQUEST['Origen'];    
    $Transmision=$_REQUEST['Transmision']; 
    $Cilindros=$_REQUEST['Cilindros'];  
    $NumMotor=$_REQUEST['NumMotor'];    
    $Propietario=$_REQUEST['Propietario']; 
    $Capacidad=$_REQUEST['Capacidad'];   
    $Tipo=$_REQUEST['Tipo'];    
    
    
    
	print("Placa= ".$Placa."<br>");
    print("Marca= ".$Marca."<br>");
    print("Modelo= ".$Modelo."<br>");
    print("Color= ".$Color."<br>");
	print("NSerie=" .$NSerie."<br>");
    print("Puerta=" .$Puerta."<br>");
    print("Uso=" .$Uso."<br>");
    print("Origen=" .$Origen."<br>");
    print("Transmision=" .$Transmision."<br>");
    print("Cilindros=" .$Cilindros."<br>");
    print("NumMotor=" .$NumMotor."<br>");
    print("Propietario=" .$Propietario."<br>");
    print("Capacidad=" .$Capacidad."<br>");
    print("Tipo=" .$Tipo."<br>");
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO vehiculos 
    (Propietario,NumMotor,Cilindraje,Transmicion,Origen,Uso,Puerta,NumSerie,Color,Modelo,Marca,Placa,Capacidad,Tipo) VALUES ('$Propietario','$NumMotor',$Cilindros,'$Transmision','$Origen','$Uso',$Puerta,'$NSerie','$Color','$Modelo','$Marca','$Placa',$Capacidad,'$Tipo')";
  

        $Resultado=Consultar($Con,$SQL);
        print($Resultado);
        Cerrar($Con);
?>