<?php 
  require('../PHP/conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="StyleSheet" href="../CSS/veterinaria.css" type="text/css">
	<script type="text/javascript">
	    function eliminar(id){
	      if(confirm("Desea Eliminar Los Datos Del Cliente: "+id+" ?")){
	        location.href="../PHP/eliminarCliente.php?id="+id+"";
	      }
	    }
	    function modificar(id,aux,mod){
	      if(confirm("Desea modificar el dato: '"+aux+"' del cliente: '"+id+"' ?")){
	        var dato = prompt("Escribe el nuevo dato");
	        if(!(dato == null)){
	          location.href="../PHP/modificarCliente.php?id="+id+"&dato= "+mod+"'"+dato+"'";
	        } 
	      }
	    }
	  </script>
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

		              </tr>
		            </thead>
		            <?php $sql = 'SELECT * FROM cliente';
		            foreach ($conn->query($sql) as $row){ ?> 
		              <tr>
		                <td class="reglon"><?php echo $row['id_cliente']?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['nombre']?>','nombre = ')"><?php echo $row['nombre'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['ap_paterno']?>','ap_paterno = ')"><?php echo $row['ap_paterno'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['ap_materno']?>','ap_materno = ')"><?php echo $row['ap_materno'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['dir_calle']?>','dir_calle = ')"><?php echo $row['dir_calle'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['dir_numero']?>','dir_numero = ')"><?php echo $row['dir_numero'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['dir_ciudad']?>','dir_ciudad = ')"><?php echo $row['dir_ciudad'] ?></td>
		                <td class="reglon" onclick="modificar(<?php echo $row['id_cliente']?>,'<?php echo $row['telefono_cliente']?>','telefono_cliente = ')"><?php echo $row['telefono_cliente'] ?></td>
		                <td class="reglon" onclick="eliminar(<?php echo $row['id_cliente']?>)"><img  style="width: 40px; height: 40px;" src="../RES/delete.ico" alt=""></td>
		                
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