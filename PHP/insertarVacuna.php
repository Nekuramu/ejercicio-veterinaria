 <?php
	require('conexion.php');
	$enfermedad=$_REQUEST['enfermedad'];
	$fecha=$_REQUEST['fecha'];
	$mascota=$_REQUEST['mascota'];

	mysqli_query($conn, "INSERT INTO vacunas VALUES('','$fecha','$enfermedad','$mascota')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='../registros/mascotas.php'</script>";
?>