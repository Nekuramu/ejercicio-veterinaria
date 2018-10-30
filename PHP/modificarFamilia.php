<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	$dato=$_REQUEST['dato'];
	if(mysqli_query($conn, "UPDATE familia SET $dato WHERE id_familia = $id")){
	}
	else{
		echo '<script>alert("No se puede editar ya que estos datos son utilizados en otras tablas")</script>';
	}
	echo "<script>location.href='../registros/familias.php'</script>";
?>