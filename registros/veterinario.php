<?php 
  require('../PHP/conexion.php');
  //$aux = $_REQUEST[bus]
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="StyleSheet" href="../CSS/veterinaria.css" type="text/css">
	</head>
	<body>

		<?php include("header.html");?> 

		<div class="row">

			<div class="col-3 menu">
			  <?php include("menu.html");?>
			</div>
				
			<?php  
			$sql = "SELECT * FROM veterinario WHERE id_veterinario = 1";
            foreach ($conn->query($sql) as $row){ ?> 
			<div class="col-9">
				<h1>Veterinario </h1>
				<a href="veterinario_edit.php"><img style="width: 40px; height: 40px;" src="../RES/edit.png" alt=""></a>
			  <fieldset>
				<legend>Informacion del veterinario</legend>
				<br>	Nombre: <br>	
				<input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" disabled />
				<br>	Apellido Paterno: <br>	
				<input type="text" name="ap_p" value="<?php echo $row['ap_paterno'] ?>" disabled />
				<br>	Apellido Materno: <br>	
				<input type="text" name="ap_m" value="<?php echo $row['ap_materno'] ?>" disabled />
				<br>	Calle: <br>	
				<input type="text" name="calle" value="<?php echo $row['dir_calle'] ?>" disabled />
				<br>	Numero: <br>	
				<input type="text" name="num" value="<?php echo $row['dir_numero'] ?>" disabled />
				<br>	Ciudad: <br>	
				<input type="text" name="ciudad" value="<?php echo $row['dir_ciudad'] ?>" disabled />
				<br>	Telefono: <br>	
				<input type="text" name="tel" value="<?php echo $row['telefono'] ?>" disabled />
			</fieldset>
			</div>
			<?php } ?>
			

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>