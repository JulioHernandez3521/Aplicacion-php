<?php 

    /***OBTENER DATOS **/
    include('Conexion.php');
 
    $Con = Conectar();
    $SQL = ("SELECT l.Numero, c.Nombre, c.Observacione, l.FechaExp
    FROM licencias l, conductores c 
    WHERE l.Numero =  1
    AND c.id = l.Conductor;");

    $resultado = Consultar($Con, $SQL);
    $fila = mysqli_fetch_row($resultado);


       include('./codigoBarras.php');
    $codigo = Nombre();

    //********HAY QUE CERRAR */
    include('fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();

    /********Header*********/
    $pdf->SetFont('Arial', '', 15);
    $pdf->Image('que.png',5,5,-800);
    /**$pdf->Line(20,40,0,0);**/
    $pdf->Cell(40);
    $pdf->Cell(180,10,'Estados Unidos Mexicanos',0);
    $pdf->Ln(); 
    $pdf->Cell(40);
    $pdf->Cell(180,8,'Poder Ejecutivo del Estado de Queretaro',0);
    $pdf->Ln();
    $pdf->Cell(40);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(180,8, 'Secretaria de Seguridad Ciudadana',0);
    $pdf->Ln();
    $pdf->Cell(40);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Cell(180,8,'Licencia para Conducir',0);
    $pdf->Ln();
    /*********Main***********/
    $pdf->Cell(50);
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(180,50,'');
    $pdf->Ln();
    $pdf->Cell(50);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(180,8,'No de Licencia');
    $pdf->Ln();
    $pdf->Cell(50);
    $pdf->SetTextColor(255,0,0);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Image(30,8,'$codigo.jpg',0);
    $pdf->Ln();
    $pdf->Cell(50);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(30,8,'AUTOMOVILISTA');
    $pdf->Cell(50);
    $pdf->Image('actor.jpeg',105,53,-170);
    $pdf->Ln();
    $pdf->Cell(168);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,22,'Nombre',0);
    $pdf->Ln();
    $pdf->Cell(154);
    $pdf->SetFont('Arial','',35);
    $pdf->Cell(30,0,'VEGA',0);
    $pdf->Ln();
    $pdf->Cell(134);
    $pdf->SetFont('Arial','',35);
    $pdf->Cell(30,23,'RAMIREZ',0);
    $pdf->Ln();
    $pdf->Cell(70);
    $pdf->SetFont('Arial','B',35);
    $pdf->Cell(30,0,$fila[1],0);
    $pdf->Ln();
    $pdf->Cell(154);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,20,$fila[2],0);

    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,20,'',0);
    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,12,'Fecha de Nacimiento',0);
    $pdf->Ln();
    $pdf->Cell(4);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,5,'10/01/1851',0);
    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,18,'Fecha de Expedicion',0);
    $pdf->Ln();
    $pdf->Cell(4);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,0,$fila[3],0);
    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,18,'Valido hasta',0);
    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,0,'10/01/2023',0);
    $pdf->Ln();
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',18);
    $pdf->Cell(20,15,'Antiguedad',0);
    $pdf->Ln();
    $pdf->Cell(7);
    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(20,2,'0',0);
    $pdf->Ln();
    $pdf->Cell(7);
    $pdf->Image('firma.jpg',110,220,-300);

    /*****************************************************/

    $pdf->AddPage(); 
	$pdf->image("Emergencias.jpg",5,5,50,30);
	$pdf->image("Denuncia.jpg",150,5,50,30);

	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(150,40);
	$pdf->Cell(50,5,'Domicilio',0,2,"R");
	$pdf->SetFont('Arial','','14');
	$pdf->Cell(50,5,'EL BLANCO',0,2,"R");

	$pdf->SetFont('Arial','','14');
	$pdf->SetXY(150,60);
	$pdf->Cell(50,5,'COLON',0,2,"R");
	$pdf->Cell(50,5,'C.P. 76296',0,2,"R");
	$pdf->Cell(50,5,'QUERETARO',0,2,"R");

	$pdf->image("Auto1.png",5,80,40,20);
	$pdf->image("Auto1.png",55,80,40,20);
	$pdf->image("Auto1.png",105	,80,40,20);
	$pdf->image("Auto1.png",155	,80,40,20);
	
	$pdf->SetFont('Arial','B','12');
	$pdf->SetXY(5,100);
	$pdf->Cell(50,5,'Restricciones',0,2,"L");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'1 USA LENTES',0,2,"L");

	$pdf->SetXY(150,100);
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Grupo Sanguneo',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'NO SABE',0,2,"R");
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Donador de sangre',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'NO',0,2,"R");
	$pdf->SetFont('Arial','B','12');
	$pdf->Cell(50,5,'Numero de Emergencias',0,2,"R");
	$pdf->SetFont('Arial','','18');
	$pdf->Cell(50,10,'000-442-102-5106',0,2,"R");

	$pdf->image("firma.jpg",150,155,50,50);
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
	



    $pdf->Output('I','Licencia.pdf');
    Cerrar($Con);
?>