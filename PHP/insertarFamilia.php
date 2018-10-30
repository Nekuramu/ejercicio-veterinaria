
<?php
	require('conexion.php');
	$ap=$_REQUEST['apellido'];
	$cuenta=$_REQUEST['cuenta_bancaria'];
	$calle=$_REQUEST['dir_calle'];
	$num=$_REQUEST['dir_numero'];
	$ciudad=$_REQUEST['dir_ciudad'];
	$tel=$_REQUEST['telefono_familia'];

	mysqli_query($conn, "INSERT INTO familia VALUES('','$ap','$cuenta','$calle','$num','$ciudad','$tel')") or die("Problemas en el INSERT:".mysqli_error($conn));
		echo '<script>alert("Registrado")</script>';
		echo "<script>location.href='../registros/familias.php'</script>";
?>