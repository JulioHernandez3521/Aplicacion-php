<?php
	$ID=$_POST['ID'];
	$Nombre=$_POST['Nombre'];
	$Domicilio=$_POST['Domicilio'];
	$Donador=$_POST['Donador'];
    $GrupoSanguineo=$_POST['GrupoSanguineo'];
    $Firma=$_POST['Firma'];
    $Foto = $_POST['Foto']; 
    $Resticciones=$_POST['Resticciones'];
    $Observaciones = $_POST['Observaciones'];

	print("Nombre= ".$Nombre."<br>");
    print("ID= ".$ID."<br>");
    print("Domicilio= ".$Domicilio."<br>");
	print("Donador=" .$Donador."<br>");
    print("GrupoSanguineo=".$GrupoSanguineo."<br>");
    print("Firma=".$Firma."<br>");
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO conductores VALUES ($ID,'$Nombre','$Domicilio','$Donador','$Firma','$Foto','$Restricciones','$Observaciones','$GrupoSanguineo')";


    $Resultado=Consultar($Con,$SQL);
    print($Resultado);
    Cerrar($Con);

?>