<?php
	$RFC=$_POST['Rfc'];
	$Nombre=$_POST['Nombre'];
	$Domicilio=$_POST['Domicilio'];
	$Sexo=$_POST['Sexo'];


	print("RFC= ".$RFC."<br>");
	print("Nombre=" .$Nombre."<br>");
	print("Domicilio=".$Domicilio."<br>");
	print("Sexo=".$Sexo."<br>");

    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO propietarios VALUES ('$RFC','$Nombre','$Domicilio','$Sexo')";


        $Resultado=Consultar($Con,$SQL);
        print($Resultado);
        Cerrar($Con);


    
?>