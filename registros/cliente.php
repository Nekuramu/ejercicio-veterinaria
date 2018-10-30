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
			  	<h1>Clientes</h1>
			  	<p>Aqui se manejan los registros de los clientes</p>
			  	<a href="cliente_add.php"><img style="width: 40px; height: 40px;" src="../RES/add.png" alt=""></a>
			  	<a href="cliente_edit.php"><img style="width: 40px; height: 40px;" src="../RES/edit.png" alt="">	</a>
				<table style="width:100%">
					<thead class="tabla">
		              <tr>
		                <th class="reglon">Cliente</th>
		                <th class="reglon">Nombre</th>
		                <th class="reglon">Apellido Paterno</th>
		                <th class="reglon">Apellido Materno</th>
		                <th class="reglon">Calle</th>
		                <th class="reglon">Numero</th>
		                <th class="reglon">Ciudad</th>
		                <th class="reglon">Telefono</th>
		                <th class="reglon">Veterinario</th>
		                <th class="reglon">Familia</th>
		              </tr>
		            </thead>
		            <?php $sql = 'SELECT c.id_cliente,c.nombre,c.ap_paterno,c.ap_materno,c.dir_calle,c.dir_numero,c.dir_ciudad,
		                          c.telefono_cliente,v.nombre as "veterinario",f.apellido_familia from cliente c
		                          inner join veterinario v on c.id_veterinario = v.id_veterinario
		                          inner join familia f on c.id_familia = f.id_familia'
		                  ;
		            foreach ($conn->query($sql) as $row){ ?> 
		              <tr>
		                <td class="reglon"><?php echo $row['id_cliente']?></td>
		                <td class="reglon"><?php echo $row['nombre'] ?></td>
		                <td class="reglon"><?php echo $row['ap_paterno'] ?></td>
		                <td class="reglon"><?php echo $row['ap_materno'] ?></td>
		                <td class="reglon"><?php echo $row['dir_calle'] ?></td>
		                <td class="reglon"><?php echo $row['dir_numero'] ?></td>
		                <td class="reglon"><?php echo $row['dir_ciudad'] ?></td>
		                <td class="reglon"><?php echo $row['telefono_cliente'] ?></td>
		                <td class="reglon"><?php echo $row['veterinario'] ?></td>
		                <td class="reglon"><?php echo $row['apellido_familia'] ?></td>
		              </tr>
		            <?php } ?>
				</table>
			</div>

		</div>

		<div class="row">
			<footer>
				Derechos reservados Me enoja S.A. de S.V.
			</footer>
		</div>

	</body>
</html>