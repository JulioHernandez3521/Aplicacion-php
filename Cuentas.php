<?php
	$Username=$_GET['Username'];
	$Password=$_GET['Password'];
	$Tipo=$_GET['Tipo'];
	$Status=$_GET['Status'];
    $Bloqueado=$_GET['Bloqueado'];
    $Intento=$_GET['Intento'];
    
    

	print("Username= ".$Username."<br>");
    print("Password= ".$Password."<br>");
    print("Tipo= ".$Tipo."<br>");
	print("Status=" .$Status."<br>");
	print("Bloqueado=".$Bloqueado."<br>");
    print("Intento=".$Intento."<br>");
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "INSERT INTO cuentas (Password,Tipo,Username,Bloqueado,Status,Intento)VALUES ('$Password','$Tipo','$Username','$Bloqueado','$Status','$Intento')";
    //_----------------------------------///
    
    $C = './Cuentas.csv';        
    if(file_exists($C)){
        $Manejador = fopen("Cuentas.csv", "a+");
        fputs($Manejador,"$Password,$Tipo,$Username,$Bloqueado,$Status,$Intento");    
        fputs($Manejador,"\n");
        fclose($Manejador);
    }else{
        $Manejador = fopen("Cuentas.csv", "a+");
        fputs($Manejador,"'Password','Tipo','Username','Bloqueado','Status','Intento'");
        fputs($Manejador,"\n");
        fclose($Manejador);
    }

        $Resultado=Consultar($Con,$SQL);
        print($Resultado);
        Cerrar($Con);

?>