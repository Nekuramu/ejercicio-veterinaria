
<?php
	require('conexion.php');
	$nombre=$_REQUEST['nombre'];
	$ApPaterno=$_REQUEST['ApPaterno'];
	$ApMaterno=$_REQUEST['ApMaterno'];
	$telefono=$_REQUEST['telefono'];
	$calle=$_REQUEST['calle'];
	$num=$_REQUEST['num'];
	$city=$_REQUEST['city'];
	$nif=$_REQUEST['nif'];
	$veterinario=$_REQUEST['veterinario'];

	mysqli_query($conn, "INSERT INTO cliente VALUES('','$nombre','$ApPaterno','$ApMaterno','$calle','$num','$city','$telefono','$veterinario','$nif')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='../registros/cliente.php'</script>";
?>