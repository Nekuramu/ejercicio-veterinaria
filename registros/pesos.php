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
	    		<a href="pesos_add.php"><img style="width: 40px; height: 40px;" src="../RES/add.png" alt=""></a>
	          <table>
	        
	            <thead class="tabla">
	              <tr>
	                <th class="reglon">Fecha</th>
	                <th class="reglon">Peso</th>
	              </tr>
	            </thead>
	            <?php $sql = "SELECT fecha_peso, peso
	                          from peso where id_mascota = '$id'";
	            foreach ($conn->query($sql) as $row){ ?> 
	              <tr>
	                <td class="reglon"><?php echo $row['fecha_peso']?></td>
	                <td class="reglon"><?php echo $row['peso'] ?></td>
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