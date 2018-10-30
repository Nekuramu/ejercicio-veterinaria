<?php 
  require('../PHP/conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="StyleSheet" href="../CSS/veterinaria.css" type="text/css">
	<script type="text/javascript">
	    function modificar(id,aux,mod){
	      if(confirm("Desea modificar el dato: '"+aux+"' del verterinario: '"+id+"' ?")){
	        var dato = prompt("Escribe el nuevo dato");
	        if(!(dato == null)){
	          location.href="modificarVeterinario.php?id="+id+"&dato= "+mod+"'"+dato+"'";
	        } 
	      }
	    }
  	</script>
</head>
	<body>

		<?php include("header.html");?> 

		<div class="row">

			<div class="col-3 menu">
			  <ul>
			    <?php include("menu.html");?> 
			  </ul>
			</div>

			<?php  
			$sql = "SELECT * FROM veterinario WHERE id_veterinario = 1";
            foreach ($conn->query($sql) as $row){ ?> 

			<form class="col-9" ACTION="../PHP/modificarVeterinario.php" >
			  <fieldset>
				<legend>Informacion del veterinario</legend>
				<br>	Nombre: <br>	
				<input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" required />
				<br>	Apellido Paterno: <br>	
				<input type="text" name="ap_p" value="<?php echo $row['ap_paterno'] ?>" required />
				<br>	Apellido Materno: <br>	
				<input type="text" name="ap_m" value="<?php echo $row['ap_materno'] ?>" required />
				<br>	Calle: <br>	
				<input type="text" name="calle" value="<?php echo $row['dir_calle'] ?>" required />
				<br>	Numero: <br>	
				<input type="text" name="num" value="<?php echo $row['dir_numero'] ?>" required />
				<br>	Ciudad: <br>	
				<input type="text" name="ciudad" value="<?php echo $row['dir_ciudad'] ?>" required />
				<br>	Telefono: <br>	
				<input type="text" name="tel" value="<?php echo $row['telefono'] ?>" required />
				<br>
				<INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
			</fieldset>
			</form>
			<?php } ?>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>