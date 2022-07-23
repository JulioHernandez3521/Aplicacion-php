<?php
//conectar al smdb y seleccionar base de datos:
	$Cont= mysqli_connect("localhost","root","","controlvehicular2020");
// 	print_r($Cont);
// EJecutar la consulta 
	for($a=2;$a<10000000;$a++){
	$SQL= "INSERT INTO agentes VALUES('$a','1','1','1')";
	$Query=mysqli_query($Cont, $SQL);
}
	//print($Query);
	//CErrar la conexion
	$Cerrar=mysqli_close($Cont);
	print($Cerrar);

?>