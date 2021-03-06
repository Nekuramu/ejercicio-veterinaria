<?php
	require('../fpdf/fpdf.php');
	require('conexion.php');
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../RES/anger.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte General de Vacunas',0,1,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}


	$query = "SELECT mascota.alias, mascota.raza,  mascota.fecha_nacimiento, mascota.color, vacunas.enfermedad, vacunas.fecha_vacuna FROM mascota INNER JOIN vacunas ON mascota.id_mascota = vacunas.id_mascota ORDER BY mascota.fecha_nacimiento";
	$resultado = $conn->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Raza',1,0,'C',1);
	$pdf->Cell(40,6,'Fecha nacimiento',1,0,'C',1);
	$pdf->Cell(25,6,'Color',1,0,'C',1);
	$pdf->Cell(30,6,'Enfermedad',1,0,'C',1);
	$pdf->Cell(35,6,'Fecha de Vacuna',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['alias']),1,0,'C');
		$pdf->Cell(30,6,$row['raza'],1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['fecha_nacimiento']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['color']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['enfermedad']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['fecha_vacuna']),1,1,'C');
		
	}

	$pdf->Output();
?>