<?php 
  require('../PHP/conexion.php');
?>
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
			  <h1>Familias</h1>
			  <p>Aqui se manejan los registros de las familias</p>
			  <a href="familias_add.php"><img style="width: 40px; height: 40px;" src="../RES/add.png" alt=""></a>
			  <a href="familias_edit.php"><img style="width: 40px; height: 40px;" src="../RES/edit.png" alt=""></a>
			  <table style="width:100%">
        
	            <thead class="tabla">
	              <tr>
	                <th class="reglon">Familia</th>
	                <th class="reglon">Apellido</th> 
	                <th class="reglon">Cuenta Bancaria</th>
	                <th class="reglon">Calle</th>
	                <th class="reglon">Numero</th>
	                <th class="reglon">Ciudad</th>
	                <th class="reglon">Telefono</th>
	              </tr>
	            </thead>
	            <?php $sql = 'SELECT * FROM familia';
	            foreach ($conn->query($sql) as $row){ ?> 
	              <tr>
	                <td class="reglon"><?php echo $row['id_familia']?></td>
	                <td class="reglon"><?php echo $row['apellido_familia'] ?></td>
	                <td class="reglon"><?php echo $row['cuenta_bancaria'] ?></td>
	                <td class="reglon"><?php echo $row['dir_calle'] ?></td>
	                <td class="reglon"><?php echo $row['dir_numero'] ?></td>
	                <td class="reglon"><?php echo $row['dir_ciudad'] ?></td>
	                <td class="reglon"><?php echo $row['telefono_familia'] ?></td>
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