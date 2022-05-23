<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$idCliente = $_GET['id_pago'];
	
	$sql = "SELECT * FROM pagos WHERE id_pago ='$idCliente'";
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
			
			<form class="form-horizontal" method="POST" action="update_pagos.php" autocomplete="off">
			<div class="form-group">
					<label for="id_pago" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pago" name="id_pago" placeholder="Ingrese el id" value="<?php echo $row['id_pago']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="fec_pag_inmu" class="col-sm-2 control-label">Fecha </label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="fec_pag_inmu" name="fec_pag_inmu" placeholder="Ingrese la fecha de pago" value="<?php echo $row['fec_pag_inmu']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="mont_pag" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="mont_pag" name="mont_pag" placeholder="Ingrese el monto de pago" value="<?php echo $row['mont_pag']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="tip_pag" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="tip_pag" name="tip_pag" placeholder="Ingrese el tipo de pago" value="<?php echo $row['tip_pag']; ?>"  required>
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="pagos.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>