<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$id_cod = $_GET['id_cod'];
	
	$sql = "SELECT * FROM codeudor WHERE id_cod ='$id_cod'";
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
			
			<form class="form-horizontal" method="POST" action="update_aso.php" autocomplete="off">

				<div class="form-group">
					<label for="id_cod" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_cod" name="id_cod" placeholder="Ingrese el nombre del codeudor" value="<?php echo $row['id_cod']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="nom_cod" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="nom_cod" name="nom_cod" placeholder="Ingrese el nombre del codeudor" value="<?php echo $row['nom_cod']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tel_cod" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="tel_cod" name="tel_cod" placeholder="Ingrese el telefono de codeudor" value="<?php echo $row['tel_cod']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="cont_cod" class="col-sm-2 control-label">Contrato</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="cont_cod" name="cont_cod" placeholder="Ingrese el tipo de contrato del codeudor" value="<?php echo $row['cont_cod']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">Id arrendatario</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="Ingrese el id arrendatario" value="<?php echo $row['id_arren']; ?>"  required>
					</div>
				</div>

				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="codeudor.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>