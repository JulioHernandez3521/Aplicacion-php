<?php
	$ID=$_POST['ID'];
	$Garantia=$_POST['Garantia'];
	$Motivo=$_POST['Motivo'];
	$Fecha=$_POST['Fecha'];
    $Hora=$_POST['Hora'];
    $NumeroLicencia=$_POST['NumeroLicencia'];
    $Placa=$_POST['Placa'];
    $NumAgente=$_POST['NumAgente'];
    $Licencia=$_POST['Licencia'];
    

	print("ID= ".$ID."<br>");
    print("Garantia= ".$Garantia."<br>");
    print("Motivo= ".$Motivo."<br>");
	print("Fecha=" .$Fecha."<br>");
	print("Hora=".$Hora."<br>");
	print("NumeroLicencia=".$NumeroLicencia."<br>");
    print("Placa= ".$Placa."<br>");
    print("NumAgente= ".$NumAgente."<br>");
    print("Licencia= ".$Licencia."<br>");
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO multas VALUES ($ID,'$Garantia','$Motivo','$Fecha','$Hora','$NumeroLicencia','$Placa','$NumAgente','$Licencia')";


    $Resultado=Consultar($Con,$SQL);
    print($Resultado);
    Cerrar($Con);


?>