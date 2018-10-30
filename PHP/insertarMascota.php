
<?php
	require('conexion.php');
	$fecha=$_REQUEST['fecha_nac'];
	$alias=$_REQUEST['alias'];
	$raza=$_REQUEST['raza'];
	$especie=$_REQUEST['especie'];
	$color=$_REQUEST['color'];
	$peso=$_REQUEST['peso_actual'];
	$precio=$_REQUEST['precio'];
	$veterinario=$_REQUEST['veterinario'];
	$cliente=$_REQUEST['cliente'];

	mysqli_query($conn, "INSERT INTO mascota VALUES('','$fecha','$alias','$raza','$especie','$color','$peso','$precio','$veterinario','$cliente')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='../registros/mascota.php'</script>";
?>