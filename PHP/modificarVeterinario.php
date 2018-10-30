<?php
	require('../PHP/conexion.php');
	$nombre=$_REQUEST['nombre'];
	$ap_p=$_REQUEST['ap_p'];
	$ap_m=$_REQUEST['ap_m'];
	$calle=$_REQUEST['calle'];
	$tel=$_REQUEST['tel'];
	$ciudad=$_REQUEST['ciudad'];
	$num=$_REQUEST['num'];
	if(mysqli_query($conn, "UPDATE veterinario 
		SET nombre = '$nombre', ap_paterno = '$ap_p', ap_materno = '$ap_m', dir_calle = '$calle', dir_numero = '$num', dir_ciudad ='$ciudad', telefono = '$tel'  WHERE id_veterinario = 1")){
	}
	else{
		echo '<script>alert("No se puede editar ya que estos datos son utilizados en otras tablas")</script>';
	}
	echo "<script>location.href='../registros/veterinario.php'</script>"
?>