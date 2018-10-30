<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	
	if(mysqli_query($conn, "DELETE FROM veterinario WHERE id_veterinario='$id'")){
		echo "<script>location.href='pagEliminarVeterinario.php'</script>";
	}
	else{
		echo '<script>alert("No se puede borrar ya que estos datos son utilizados en otras tablas")</script>';
		echo "<script>location.href='pagEliminarVeterinario.php'</script>";
	}		
?>