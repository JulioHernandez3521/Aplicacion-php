<?php

	include("../Conexion.php");
	$Con=Conectar();
	$SQL = "SELECT * FROM vehiculos WHERE Placa='22UTX89'";
	$Resultado = Consultar($Con,$SQL);
	$Fila = mysqli_fetch_row($Resultado);
	Cerrar($Con);
	$Text = "Placa:".$Fila[0]."NumMotor:".$Fila[11]."Propirtario:".$Fila[12];
	
	//Codigo QR
	require "../phpqrcode/qrlib.php";
	
	$filename ="Codigos/$Fila[0].png";
	$tamano = 5;
	$level = "L";
	$framSize= 3;

	QRcode::png($Text,$filename,$level,$tamano,$framSize);

//__________________----------------------------------------------------_________________________


	include("../fpdf.php");
	$pdf = new FPDF('L','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'TIPO DE SERVICIO',0,0,"L");
	$pdf->Cell(70,10,'HOLOGRAMA',0,0,"L");
	$pdf->Cell(70,10,'FOLIO',0,0,"L");
	$pdf->Cell(70,7,'PLACA',0,01,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(140,5,'PARTICULAR',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,5,'23r423bjfb',0,0,"L");
	$pdf->Cell(70,5,'PR343R43IO',0,01,"L");
	$pdf->Cell(30,5,'PROPIETARIO',0,0,"L");
	$pdf->Cell(30,5,'JUILIO HERNANDEZ LOPEZ',0,0,"L");
/*--------------------------------------------- */
	$pdf->Ln(30);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'APC',0,0,"L");
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(70,10,'Numero de serie',0,0,"L");
	$pdf->SetFont('times','','10');
		$pdf->Cell(50,10,' ',0,0,"L");
	$pdf->Cell(70,10,'MODELO',0,0,"L");
	$pdf->Ln(5);
	$pdf->SetFont('times','','15');
	$pdf->Cell(70,10,'#########',0,0,"L");
	$pdf->Cell(70,10,'#########',0,0,"L");
	$pdf->SetFont('Arial','b','12');
		$pdf->Cell(50,10,' ',0,0,"L");
	$pdf->Cell(70,10,'2020',0,0,"L");
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'LOCALIDAD',0,0,"L");
	$pdf->Cell(70,10,'#########',0,0,"L");
	$pdf->Cell(50,10,'',0,0,"L");
	$pdf->Cell(140,10,'OPERACION',0,0,"L");
	$pdf->Ln(8);
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(70,5,'SANTIAGO DE',0,0,"L");
	$pdf->Ln(5);
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(70,5,'QUERETARO',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(50,10,'#########',0,0,"L");
		$pdf->Cell(50,10,' ',0,0,"L");
	$pdf->Cell(140,10,'FOLIO',0,0,"L");
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
	$pdf->Cell(140,10,'MUNICIPIO',0,0,"L");
	$pdf->SetFont('Arial','B','12');
		$pdf->Cell(50,10,' ',0,0,"L");
	$pdf->Cell(70,10,'A  999990220',0,0,"L");
	$pdf->Ln(8);
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(140,5,'QUERETARO',0,0,"L");
	$pdf->SetFont('times','','10');
		$pdf->Cell(50,10,' ',0,0,"L");
	$pdf->Cell(140,5,'PLACA ANT	',0,0,"L");	
/*--------------------------------------------- */
	$pdf->Ln(20);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'NUMERO DE CONSTANCIA',0,0,"L");
	$pdf->Cell(30,10,'CILINDAJE',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(20,10,'4',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'CVE. VEHICULAR',0,0,"L");
	$pdf->Cell(70,10,'FECHA DE EXPEDICION',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'DE INSCRIPCION (NCI)',0,0,"L");
	$pdf->Cell(30,10,'CAPACIDAD',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(20,10,'0',0,0,"L");
	$pdf->Cell(70,10,'5612',0,0,"L");
	$pdf->Cell(70,10,'12-MAY-20',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
		$pdf->Cell(70,10,'',0,0,"L");
	$pdf->Cell(30,10,'PUERTAS',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(20,10,'4',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(20,10,'CLASE',0,0,"L");	
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(50,10,'1',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(40,10,'OFICINA EXPEDIDORA',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(10,10,'1',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'ORIGEN',0,0,"L");
	$pdf->Cell(30,10,'ASIENTOS',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(20,10,'5',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(20,10,'TIPO',0,0,"L");	
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(50,10,'5',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(40,10,'MOVIMIENTO',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','b','15');
	$pdf->Cell(70,10,'IMPORTADO',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(30,10,'COMBUSTIBLE',0,0,"L");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(20,10,'1',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(20,10,'REC',0,0,"L");	
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(50,10,'36',0,0,"L");
	$pdf->SetFont('times','b','15');
	$pdf->Cell(70,10,'TARJETA DE CIRCULACI',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','','10');
	$pdf->Cell(70,10,'COLOR',0,0,"L");
	$pdf->Cell(30,10,'TRANSMISION',0,0,"L");
		$pdf->Cell(20,10,'',0,0,"L");
	$pdf->Cell(20,10,'RFA',0,0,"L");	
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(50,10,'5',0,0,"L");
	$pdf->SetFont('times','','10');
	$pdf->Cell(40,10,'NUMERO DE MOTOR',0,0,"L");
//--
	$pdf->Ln(5);
	$pdf->SetFont('times','b','15');
	$pdf->Cell(70,10,'BEIGE TERRA MET',0,0,"L");
	$pdf->Cell(100,10,'ESTANDAR',0,0,"L");
		$pdf->Cell(20,10,'',0,0,"L");
	$pdf->Cell(70,10,'#############',0,0,"L");
/*--------------------------------------------- */
	$pdf->image("Escudo.jpg",20,155,60,40);
	$pdf->image("Qto.png",90,155,40,40);
	$pdf->image("Codigos/$Fila[0].png",140,165,30,30);

//
	$pdf->Ln(30);
	$pdf->SetFont('times','b','15');
	$pdf->Cell(70,10,'',0,0,"L");
	$pdf->Cell(105,10,'',0,0,"L");
	$pdf->Cell(70,10,'PODER EJECUTIVO DEL',0,0,"L");
//
	$pdf->Ln(5);
	$pdf->SetFont('times','b','15');
	$pdf->Cell(70,10,'',0,0,"L");
	$pdf->Cell(105,10,'',0,0,"L");
	$pdf->Cell(70,10,'ESTADO DE QUERETARO',0,0,"L");
//
	$pdf->Ln(5);
	$pdf->SetFont('times','b','10');
	$pdf->Cell(70,10,'',0,0,"L");
	$pdf->Cell(105,10,'',0,0,"L");
	$pdf->Cell(70,10,'SECRETARIA DE PLANEACION Y FINANZAS',0,0,"L");
	$pdf->Output();

?>

