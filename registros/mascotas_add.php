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
			  <form class="col-9" action="../PHP/insertarMascota.php" method="post" onsubmit="return validar(this)" name="formMascota" class="sign-up" style="width: 700px;">
		          <h1 class="sign-up-title">Llenar Todos Los Campos</h1>
		          <label class="sign-up-input">Fecha Nacimiento:</label> 
		          <input type="date" class="sign-up-input" name="fecha_nac" autofocus>
		          <label class="sign-up-input">Datos:</label> 
		          <input type="text" class="sign-up-input" name="alias" placeholder="Alias"/>
		          <label class="sign-up-input">Raza:</label> 
		          <select id="raza" name="raza" class="sign-up-input">
		            <option value="Pastor Aleman" selected="selected">Pastor Aleman</option>
		            <option value="Grand Danes">Grand Danes</option>
		            <option value="Salchisa">Salchisa</option>
		            <option value="Boxer">Boxer</option>
		            <option value="Beagle">Beagle</option>
		            <option value="Chihuaha">Chihuaha</option>
		          </select>
		          <label class="sign-up-input">Tipo:</label> 
		          <select id="especie" name="especie" class="sign-up-input">
		            <option value="Grande" selected="selected">Grande</option>
		            <option value="Mediano">Mediano</option>
		            <option value="Chico">Chico</option>
		            <option value="Chico">Rara</option>
		          </select>
		          <input type="text" class="sign-up-input" name="color" placeholder="Color"/>
		          <input type="number" class="sign-up-input" name="peso_actual"  placeholder="Peso actual"/>
		          <input type="number" class="sign-up-input" name="precio" placeholder="Precio"/>
		          
		          <label class="sign-up-input">ID Veterinario:</label>
		          <select name="veterinario" class="sign-up-input">
		          <?php
		                          
		            $query = $conn -> query ("SELECT * FROM veterinario");
		                            
		            while ($valores = mysqli_fetch_array($query)) {
		                              
		              echo '<option value="'.$valores[id_veterinario].'">'.$valores[nombre].'</option>';
		                                
		            }
		          ?>
		          </select>
		          <label class="sign-up-input">ID Cliente:</label>
		          <select name="cliente" class="sign-up-input">
		          <?php
		                          
		            $query = $conn -> query ("SELECT * FROM cliente");
		                            
		            while ($valores = mysqli_fetch_array($query)) {
		                              
		              echo '<option value="'.$valores[id_cliente].'">'.$valores[nombre].'</option>';
		                                
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