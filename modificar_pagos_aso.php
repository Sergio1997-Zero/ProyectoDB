<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$id_arren = $_GET['id_pago'];
	
	$sql = "SELECT * FROM tiene WHERE id_pago ='$id_arren'";
	$resultado=mysqli_query($conexion,$sql);

	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css-bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css-bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update_pagos_aso.php" autocomplete="off">

				<div class="form-group">
					<label for="id_pago" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pago" name="id_pago" placeholder="Ingrese su Nombre" value="<?php echo $row['id_pago']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_inmu" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_inmu" name="id_inmu" placeholder="Ingrese su correo" value="<?php echo $row['id_inmu']; ?>"  required>
					</div>
				</div>

				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Pagos_asociados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>