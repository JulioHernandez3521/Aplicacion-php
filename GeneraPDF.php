<?php
	include("fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('times','B','16');
	$pdf->Cell(40,20,'Desarrollo de aplicaciones');
	$pdf->Output();

?>

