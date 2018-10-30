<?php 
  require('../PHP/conexion.php');
  $id=$_REQUEST['id'];
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

			<form class="col-9" style="width: 900px;">
	        	<h1 class="sign-up-title">Vacunas</h1>
	    		<a href="vacunas_add.php"><img style="width: 40px; height: 40px;" src="../RES/add.png" alt=""></a>
	          <table>
	        
	            <thead class="tabla">
	              <tr>
	                <th class="reglon">Vacuna</th>
	                <th class="reglon">Fecha</th>
	                <th class="reglon">Enfermedad</th>
	              </tr>
	            </thead>
	            <?php $sql = "SELECT id_vacunas, fecha_vacuna, enfermedad
	                          from vacunas where id_mascota = '$id'";
	            foreach ($conn->query($sql) as $row){ ?> 
	              <tr>
	                <td class="reglon"><?php echo $row['id_vacunas']?></td>
	                <td class="reglon"><?php echo $row['fecha_vacuna'] ?></td>
	                <td class="reglon"><?php echo $row['enfermedad'] ?></td>
	              </tr>
	            <?php } ?>
	          </table>
	        </form>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>