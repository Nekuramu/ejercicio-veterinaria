<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	
	if(mysqli_query($conn, "DELETE FROM familia WHERE id_familia='$id'")){
	}
	else{
		echo '<script>alert("No se puede borrar ya que estos datos son utilizados en otras tablas")</script>';
	}
	echo "<script>location.href='../registros/familias.php'</script>";
?>