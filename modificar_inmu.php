<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$id_inmu = $_GET['id_inmu'];
	
	$sql = "SELECT * FROM inmueble WHERE id_inmu = '$id_inmu'";
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
			
			<form class="form-horizontal" method="POST" action="modificar_inmu.php" autocomplete="off">
				<div class="form-group">
					<label for="id_inmu" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_inmu" name="id_inmu" placeholder="ID" value="<?php echo $row['id_inmu']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="direc_inmu" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="direc_inmu" name="direc_inmu" placeholder="Ingrese su Nombre" value="<?php echo $row['direc_inmu']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tip_inmu" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="tip_inmu" name="tip_inmu" placeholder="Ingrese su correo" value="<?php echo $row['tip_inmu']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="arri_inmu" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="arri_inmu" name="arri_inmu" placeholder="Ingrese su correo Electronico" value="<?php echo $row['arri_inmu']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="cant_habi" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="cant_habi" name="cant_habi" placeholder="Ingrese su dirección" value="<?php echo $row['cant_habi']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="cant_bano" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="cant_bano" name="cant_bano" placeholder="Ingrese su dirección" value="<?php echo $row['cant_bano']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="parq_inmu" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="parq_inmu" name="parq_inmu" placeholder="Ingrese su dirección" value="<?php echo $row['parq_inmu']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="cont_cocina" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="cont_cocina" name="cont_cocina" placeholder="Ingrese su dirección" value="<?php echo $row['cont_cocina']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="Ingrese su dirección" value="<?php echo $row['id_arren']; ?>"  required>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="clientes.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>