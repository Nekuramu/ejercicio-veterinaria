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
			  <ul>
			    <?php include("menu.html");?>  
			  </ul>
			</div>

			<div class="col-9">
			    <FORM class="col-9" ACTION="../PHP/insertarFamilia.php">
					<fieldset>
						<legend>Registro de familia</legend>
						<br>Apellido Familia: <br>	
						<input type="text" name="apellido" value="" required="Llenalo por favor" />
					    <br>Cuenta Bancaria: <br>	
						<input type="text" name="cuenta_bancaria" value="" required="" />
						<br>Calle: <br>	
						<input type="text" name="dir_calle" value="" required="" />
						<br>Numero: <br>	
						<input type="text" name="dir_numero" value="" required="" />
						<br>Ciudad: <br>	
						<input type="text" name="dir_ciudad" value="" required="" />
						<br>Telefono: <br>	
						<input type="text" name="telefono_familia" value="" required="" />
					    <br>
						<input type="submit" value="Guardar" />
					</fieldset>
				</div>
			</div>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>