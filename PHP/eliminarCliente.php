<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	
	if(mysqli_query($conn, "DELETE FROM cliente WHERE id_cliente='$id'")){
		echo "<script>location.href='pagEliminarCliente.php'</script>";
	}
	else{
		echo '<script>alert("No se puede borrar ya que estos datos son utilizados en otras tablas")</script>';
		echo "<script>location.href='../registros/cliente.php'</script>";
	}		
?>