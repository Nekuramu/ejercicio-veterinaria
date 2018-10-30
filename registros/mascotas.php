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

			<FORM class="col-9">
			  <h1>Mascotas</h1>
			  <p>Aqui se manejan los registros de las mascotas</p>
			  <a href="mascotas_add.php"><img style="width: 40px; height: 40px;" src="../RES/add.png" alt="">
			  </a>
			  <a href="mascotas_edit.php"><img style="width: 40px; height: 40px;" src="../RES/edit.png" alt="">

				<br>
				<br>
				<a href="../PHP/reporteVacunas.php">Reporte de Vacunas</a>
				<br>
				<a href="../PHP/reportePesos.php">Reporte de Pesos</a>
				<br>
				<br>

			  </a>
			  <table style="width:100%">
				  <thead class="tabla">
	              <tr>
	                <th class="reglon">Mascota</th>
	                <th class="reglon">Fecha Nacimiento</th>
	                <th class="reglon">Alias</th>
	                <th class="reglon">Raza</th>
	                <th class="reglon">Especie</th>
	                <th class="reglon">Color</th>
	                <th class="reglon">Peso Actual</th>
	                <th class="reglon">Precio</th>
	                <th class="reglon">Veterinario</th>
	                <th class="reglon">Cliente</th>
	                <th class="reglon">Vacunas</th>
	                <th class="reglon">pesos</th>
	              </tr>
	            </thead>
	            <?php $sql = 'SELECT m.id_mascota,m.fecha_nacimiento,m.alias,m.raza,m.especie,m.color,m.peso_actual,m.precio,
	                          v.nombre as "veterinario",c.nombre as "cliente" from mascota m
	                          inner join veterinario v on m.id_veterinario = v.id_veterinario
	                          inner join cliente c on m.id_cliente = c.id_cliente'
	                  ;
	            foreach ($conn->query($sql) as $row){ ?> 
	              <tr>
	                <td class="reglon"><?php echo $row['id_mascota']?></td>
	                <td class="reglon"><?php echo $row['fecha_nacimiento'] ?></td>
	                <td class="reglon"><?php echo $row['alias'] ?></td>
	                <td class="reglon"><?php echo $row['raza'] ?></td>
	                <td class="reglon"><?php echo $row['especie'] ?></td>
	                <td class="reglon"><?php echo $row['color'] ?></td>
	                <td class="reglon"><?php echo $row['peso_actual'] ?></td>
	                <td class="reglon"><?php echo $row['precio'] ?></td>
	                <td class="reglon"><?php echo $row['veterinario'] ?></td>
	                <td class="reglon"><?php echo $row['cliente'] ?></td>
	                <td class="reglon"><a href="vacunas.php?id=<?php echo $row['id_mascota']?>""><img style="width: 40px; height: 40px;" src="../RES/show.png" alt=""></a></td>
	                <td class="reglon"><a href="pesos.php?id=<?php echo $row['id_mascota']?>""><img style="width: 40px; height: 40px;" src="../RES/show.png" alt=""></a></td>

	              </tr>
	            <?php } ?>
				</table>
			</FORM>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>