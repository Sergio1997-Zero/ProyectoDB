<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$id_arren = $_GET['id_arren'];
	
	$sql = "SELECT * FROM arrendatarios WHERE id_arren ='$id_arren'";
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
			
			<form class="form-horizontal" method="POST" action="update_arren.php" autocomplete="off">

				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">Id</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="Ingrese su Nombre" value="<?php echo $row['id_arren']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nom_arren" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="nom_arren" name="nom_arren" placeholder="Ingrese su correo" value="<?php echo $row['nom_arren']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="tel_arren" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="tel_arren" name="tel_arren" placeholder="Ingrese su correo Electronico" value="<?php echo $row['tel_arren']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="num_cuen" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="num_cuen" name="num_cuen" placeholder="Ingrese su dirección" value="<?php echo $row['num_cuen']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="tiempo_cont" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="tiempo_cont" name="tiempo_cont" placeholder="Ingrese su dirección" value="<?php echo $row['tiempo_cont']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="num_cedula" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="num_cedula" name="num_cedula" placeholder="Ingrese su dirección" value="<?php echo $row['num_cedula']; ?>"  required>
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