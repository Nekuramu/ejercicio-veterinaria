
<?php
	require('conexion.php');
	$venta=$_REQUEST['idVenta'];
	$mascota=$_REQUEST['mascota'];
	$cantidad=$_REQUEST['cantidad'];
	
	mysqli_query($conn, "INSERT INTO mascotas_ventas VALUES('$mascota','$venta','$cantidad')") or die("Problemas en el INSERT:".mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<script type="text/javascript">
  function funcion(){
    location.href="venderMascotas.php?idVenta=<?php echo $venta ?>";
  }
</script>
<body onload="funcion()">
</body>
</html>