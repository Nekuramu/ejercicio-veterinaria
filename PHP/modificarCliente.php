<?php
	require('conexion.php');
	$id=$_REQUEST['id'];
	$dato=$_REQUEST['dato'];
	if(mysqli_query($conn, "UPDATE cliente SET $dato WHERE id_cliente = $id")){
		echo "<script>location.href='../registros/cliente.php'</script>";;
	}
	else{
		echo '<script>alert("No se puede editar ya que estos datos son utilizados en otras tablas")</script>';
		echo "<script>location.href='../registros/cliente.php'</script>";
	}
?> 