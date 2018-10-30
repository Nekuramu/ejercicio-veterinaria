<?php 
  require('../PHP/conexion.php');
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
		        <form action="../PHP/insertarVacuna.php" method="post" class="col-9" onsubmit="return validar(this)" name="formVacuna" style="width: 700px;">
		          <h1 class="sign-up-title">Llenar Todos Los Campos</h1>
		          <input type="text" class="sign-up-input" name="enfermedad" value="" placeholder="Enfermedad"/>
		          <label class="sign-up-input">Fecha de vacunacion:</label>
		          <input type="date" class="sign-up-input" name="fecha">
		          <label class="sign-up-input">ID Mascota:</label> 
		          <select name="mascota" class="sign-up-input">
		          <?php
		                          
		            $query = $conn -> query ("SELECT * FROM mascota");
		                            
		            while ($valores = mysqli_fetch_array($query)) {
		                              
		              echo '<option value="'.$valores[id_mascota].'">'.$valores[alias].'</option>';
		                                
		            }
		          ?>
		          </select>
		          <input type="submit" name="enviar" value="Enviar" class="sign-up-button" style="width: 250px;">
		          <input type="reset" name="limpiar" value="Borrar datos" class="sign-up-button" style="width: 250px;">
		        </form>
			</div>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>