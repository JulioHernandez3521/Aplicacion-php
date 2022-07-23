<?php
    /***OBTENER DATOS **/
    include("Codigo.php");
    $x = Nombre();
    $c = 'Codigos/$x.png'; 
    if(!!file_exists($c)){
		$Codigo =  Codigo();
    }
   	
    	

    //-------------------------------------------------------------------------------//
 




	include("../fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('times','','16');
	$pdf->image("Q.png",10,10,50,50);
	$pdf->SetXY(65,3);
	$pdf->Cell(40,20,'Estados Unidos Mexicanos');
	$pdf->SetXY(65,10);
	$pdf->Cell(40,20,'Poder Ejecutivo del Estado de Queretaro');
	$pdf->SetFont('Arial','B','18');
	$pdf->SetXY(65,25);
	$pdf->Cell(40,20,'Secretaria de Seguridad Ciudadana');
	$pdf->SetFont('Arial','B','24');
	$pdf->SetXY(65,35);
	$pdf->Cell(50,20,'Licencia para conducir');
	$pdf->image("S.png",120,60,80,80);
	//-----------------------------------------
	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(140,145);
	$pdf->Cell(50,5,'Nombre',0,2,"R");
	$pdf->SetFont('Arial','','24');
	$pdf->Cell(50,10,'HERNANDEZ',0,2,"R");
	$pdf->Cell(50,10,'LOPEZ',0,2,"R");
	$pdf->SetFont('Arial','B','24');
	$pdf->Cell(50,10,'JULIO',0,2,"R");
	$pdf->SetFont('Arial','b','12');
	$pdf->Cell(50,5,'Observaciones',0,2,"R");
   	
//-----------------------------------------------------------
	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(80,100);
	$pdf->Cell(50,10,'No. de Licencia',0,2,"R");
	$pdf->SetFont('Arial','b','22');
	$pdf->Cell(50,10,'Q191897-18',0,2,"R");
	$pdf->SetFont('Arial','','14');
	$pdf->Cell(50,10,'Automovilista',0,2,"R");
	//---------------------------------------------------------
	
	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(80,220);
	$pdf->Cell(50,5,'Firma',0,2,"L");

	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(5,200);
	$pdf->Cell(50,5,'Fecha de Nacimiento',0,2,"L");
	$pdf->SetFont('Arial','','24');
	$pdf->Cell(50,10,'17/7/2000',0,2,"L");
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(50,5,'Fecha de Expedicion',0,2,"L");
	$pdf->SetFont('Arial','','24');
	$pdf->Cell(50,10,'26/12/2018',0,2,"L");
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(50,5,'Valida hasta',0,2,"L");
	$pdf->SetFont('Arial','b','24');
	$pdf->Cell(50,10,'26/12/2023',0,2,"L");
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(50,5,'Antiguedad',0,2,"L");
	$pdf->SetFont('Arial','','24');
	$pdf->Cell(50,10,'0',0,2,"L");


	//_---------------------------------------------------------------
	$pdf->Rect(10,260,20,20,"f");
	$pdf->SetFont('Arial','','22');
	$pdf->Cell(30,15,'A',0,2,"C");

	$pdf->SetFont('Arial','','14');
	$pdf->SetXY(40,260);
	$pdf->Cell(100,5,'AUTORIZADO PARA QUE LA PRESENTE',0,2,"L");
	$pdf->Cell(100,5,'SEA RECABADO COMO GRANTIA DE',0,2,"L");
	$pdf->Cell(100,5,'INFORMACION',0,2,"C");
	//---------------------------
	$pdf->AddPage(); 
	$pdf->image("Emergencias.jpg",5,5,50,30);
	$pdf->image("Denuncia.jpg",150,5,50,30);

	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(150,40);
	$pdf->Cell(50,5,'Domicilio',0,2,"R");
	$pdf->SetFont('Arial','','14');
	$pdf->Cell(50,5,'LA MONJA',0,2,"R");

	$pdf->SetFont('Arial','','14');
	$pdf->SetXY(150,60);
	$pdf->Cell(50,5,'SANTA ROSA JAUREGUI',0,2,"R");
	$pdf->Cell(50,5,'C.P. 76219',0,2,"R");
	$pdf->Cell(50,5,'QUERETARO',0,2,"R");

	$pdf->image("Auto1.png",5,80,40,20);
	$pdf->image("Auto1.png",55,80,40,20);
	$pdf->image("Auto1.png",105	,80,40,20);
	$pdf->image("Auto1.png",155	,80,40,20);
	
	$pdf->SetFont('Arial','B','12');
	$pdf->SetXY(5,100);
	$pdf->Cell(50,5,'Restricciones',0,2,"L");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'9 NINGUNA',0,2,"L");

	$pdf->SetXY(150,100);
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Grupo Sanguneo',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'ORH+',0,2,"R");
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Donador de sangre',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'SI',0,2,"R");
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Numero de Emergencias',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'000-442-102-5106',0,2,"R");

	$pdf->image("Firma.png",150,155,50,50);
	$pdf->SetXY(150,205);
	$pdf->SetFont('Arial','B','16');
	$pdf->Cell(50,7,'M. EN A.P. JUAN MARCOS GRANADOS TORRES',0,2,"R");
	$pdf->Cell(50,7,'SECRETARIO DE SEGURIDAD CIUDADANA',0,2,"R");

	$pdf->SetFont('Arial','B','16');
	$pdf->SetXY(5,220);
	$pdf->Cell(50,5,'Fundamento Legal',0,2,"L");
	$pdf->SetFont('Arial','','15');
	$pdf->Cell(100,5,'Articulo 19 Fraccion XVIII y 33 fraccion ll de la Ley Organica del Poder Ejecutivo del',0,2,"L");
	$pdf->Cell(100,5,'Estado de Queretaro, articulo 9 fraccion XVll y 55 de la Ley de Trancito del Estado',0,2,"L");
	$pdf->Cell(100,5,'de Queretaro, articulo 4 de la Ley de Procedimientos Administrativo del Estado',0,2,"L");
	$pdf->Cell(100,5,'de Queretaro, articulos 134,135,137,138,139,140,141,142y 142 del ',0,2,"L");
	$pdf->Cell(100,5,'Reglamento de Trancito del Estado de Queretaro, articulo 6 fraccion lV , nci 90 b)',0,2,"L");
	$pdf->Cell(100,5,'y 20 , fraccion lV de la ley de la Secretaria de Seguridad Ciudadana',0,2,"L");
	$pdf->image("Secreatria.png",150,250,50,50);
	
	if(file_exists($c)){
		$pdf->image("./Codigos/$x.png",85,265,50,50);	  
   	}else{	  
   		$pdf->image("./Codigos/$x.png",85,265,50,50);	  
   	}


	$pdf->Output();
 Cerrar($Con);
?>

