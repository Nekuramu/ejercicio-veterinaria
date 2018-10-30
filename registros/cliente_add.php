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

			<div class="col-9">
			    <form class="col-9" action="../PHP/insertarCliente.php" method="post" onsubmit="return validar(this)" name="formCLiente" class="sign-up" style="width: 700px;">
		          <h1 class="sign-up-title">Llenar Todos Los Campos</h1>
		          <input required="" type="text" class="sign-up-input" name="nombre" value=""  placeholder="Nombre" autofocus/>
		          <input required="" type="text" class="sign-up-input" name="ApPaterno" value="" placeholder="Apellido Paterno"/>
		          <input required="" type="text" class="sign-up-input" name="ApMaterno" value="" placeholder="Apellido Materno"/>
		          <input required="" type="number" class="sign-up-input" name="telefono" value="" placeholder="Telefono"/>
		          <br>
		          <label class="sign-up-input">Direccion:</label> 
		          <input required="" type="text" class="sign-up-input" name="calle" value="" placeholder="Calle"/>
		          <input required="" type="number" class="sign-up-input" name="num" value="" placeholder="Numero"/>
		          <input required="" type="text" class="sign-up-input" name="city" value="" placeholder="Ciudad"/>

		          <label class="sign-up-input">Familia:</label>
		          <select name="nif" class="sign-up-input">
		          <?php
		                          
		            $query = $conn -> query ("SELECT * FROM familia");
		                            
		            while ($valores = mysqli_fetch_array($query)) {
		                              
		              echo '<option value="'.$valores[id_familia].'">'.$valores[apellido_familia].'</option>';
		                                
		            }
		          ?>
		          </select> 
		          <label class="sign-up-input">Veterinario:</label>
		          <select name="veterinario" class="sign-up-input">
		          <?php
		                          
		            $query = $conn -> query ("SELECT * FROM veterinario");
		                            
		            while ($valores = mysqli_fetch_array($query)) {
		                              
		              echo '<option value="'.$valores[id_veterinario].'">'.$valores[nombre].'</option>';
		                                
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