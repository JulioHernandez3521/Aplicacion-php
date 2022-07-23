<?php
	include("Conexion.php");
	$Con=Conectar();
	$SQL="SELECT  * FROM propietarios";
	$Resultado=Consultar($Con,$SQL);
	//$Error = mysqli_error($Con);
	//print($Error);
	//$row_cnt = mysqli_num_rows($Resultado);//contar filas
	//$row_cnt = mysqli_num_rows($Resultado);
	//print("Numero de filas: ". $row_cnt );
	//printf("Estado del sistema: %s\n", mysqli_stat($Con));//Ver el estado de la conexión
	//printf("Host info: %s\n", mysqli_get_host_info($Con));//Tipo de conexion 
	//printf("%s\n", mysqli_info($Con));//DEvuelve informacion 
	///printf("Client library version: %s\n", mysqli_get_client_info());//Version de mysql
	print("Indice" mysql_field_name($Resultado, 0) . "\n";)

	Cerrar($Con);

?>