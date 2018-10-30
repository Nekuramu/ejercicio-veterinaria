<?php 
  require('../PHP/conexion.php');
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="StyleSheet" href="../CSS/veterinaria.css" type="text/css">
	<script type="text/javascript">
	    function eliminar(id){
	      if(confirm("Desea Eliminar Los Datos Del Veterinario: "+id+" ?")){
	        location.href="../PHP/eliminarFamilia.php?id="+id+"";
	      }
	    }
	    function modificar(id,aux,mod){
	      if(confirm("Desea modificar el dato: '"+aux+"' de la familia: '"+id+"' ?")){
	        var dato = prompt("Escribe el nuevo dato");
	        if(!(dato == null)){
	          location.href="../PHP/modificarFamilia.php?id="+id+"&dato= "+mod+"'"+dato+"'";
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
			  <h1>Familias</h1>
			  <p>Aqui se manejan los registros de las familias</p>
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
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['apellido_familia']?>','apellido_familia = ')"><?php echo $row['apellido_familia'] ?></td>
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['cuenta_bancaria']?>','cuenta_bancaria = ')"><?php echo $row['cuenta_bancaria'] ?></td>
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['dir_calle']?>','dir_calle = ')"><?php echo $row['dir_calle'] ?></td>
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['dir_numero']?>','dir_numero = ')"><?php echo $row['dir_numero'] ?></td>
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['dir_ciudad']?>','dir_ciudad = ')"><?php echo $row['dir_ciudad'] ?></td>
	                <td class="reglon" onclick="modificar(<?php echo $row['id_familia']?>,'<?php echo $row['telefono_familia']?>','telefono_familia = ')"><?php echo $row['telefono_familia'] ?></td>
	                <td class="reglon" onclick="eliminar(<?php echo $row['id_familia']?>)"><img  style="width: 40px; height: 40px;" src="../RES/delete.ico" alt=""></td>
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