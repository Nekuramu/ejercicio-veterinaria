<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	$dato=$_REQUEST['dato'];
	if(mysqli_query($conn, "UPDATE mascota SET $dato WHERE id_mascota = $id")){
		echo "<script>location.href='pagModificarMascota.php'</script>";
	}
	else{
		echo '<script>alert("No se puede editar ya que estos datos son utilizados en otras tablas")</script>';
		echo "<script>location.href='pagModificarMascota.php'</script>";
	}
?>