
<?php
	require('conexion.php');
	$enfermedad=$_REQUEST['enfermedad'];
	$diagnostico=$_REQUEST['diagnostico'];
	$fecha=$_REQUEST['fecha_diag'];
	$mascota=$_REQUEST['mascota'];
	
	mysqli_query($conn, "INSERT INTO historial_medico VALUES('','$fecha','$enfermedad','$diagnostico','$mascota')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='historial.php'</script>";
?>