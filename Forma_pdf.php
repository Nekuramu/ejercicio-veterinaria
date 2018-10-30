
<?php
	include 'Forma_generar_pdf.php';
	require('PHP/conexion.php');

	$query = "SELECT id_familia, apellido_familia, cuenta_bancaria, dir_calle, dir_numero, dir_ciudad, telefono_familia FROM familia";
	$resultado = $conn->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(60,6,'Ejemplar',1,0,'C',1);
	$pdf->Cell(30,6,'Tipo',1,0,'C',1);
	$pdf->Cell(30,6,'Precio',1,0,'C',1);
	$pdf->Cell(30,6,'Adelanto',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(60,6,utf8_decode($row['apellido_familia']),1,0,'C');
		$pdf->Cell(30,6,$row['dir_calle'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['dir_ciudad']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['cuenta_bancaria']),1,1,'C');
		
	}

	$pdf->Output();
?>