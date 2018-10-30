<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	
	if(mysqli_query($conn, "DELETE FROM mascota WHERE id_mascota='$id'")){
		echo "<script>location.href='pagEliminarMascotas.php'</script>";
	}
	else{
		echo '<script>alert("No se puede borrar ya que estos datos son utilizados en otras tablas")</script>';
		echo "<script>location.href='pagEliminarMascotas.php'</script>";
	}		
?>