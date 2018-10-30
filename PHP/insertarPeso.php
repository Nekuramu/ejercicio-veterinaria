 <?php
	require('conexion.php');
	$peso=$_REQUEST['peso'];
	$fecha=$_REQUEST['fecha_nue'];
	$mascota=$_REQUEST['mascota'];

	mysqli_query($conn, "INSERT INTO peso VALUES('','$fecha','$peso','$mascota')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='../registros/mascotas.php'</script>";
?>