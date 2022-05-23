<?php
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	$idCliente = $_GET['id_pro'];
	
	$sql = "SELECT * FROM propietario WHERE id_pro = '$idCliente'";
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
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

				<div class="form-group">
					<label for="id_pro" class="col-sm-2 control-label">id Propietario</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pro" name="id_pro" placeholder="Ingrese el id del propietario" value="<?php echo $row['id_pro']; ?>"  required>
					</div>
				</div>

				
				<div class="form-group">
					<label for="nom_pro" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="nom_pro" name="nom_pro" placeholder="Ingrese su Nombre" value="<?php echo $row['nom_pro']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="num_cuen_pro" class="col-sm-2 control-label">Cuenta</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="num_cuen_pro" name="num_cuen_pro" placeholder="Ingrese el numero de cuenta" value="<?php echo $row['num_cuen_pro']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="email_pro" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="email_pro" name="email_pro" placeholder="Ingrese su correo Electronico" value="<?php echo $row['email_pro']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_inmu" class="col-sm-2 control-label">Inmubele</label>
					<div class="col-sm-10">
                        <input type="text" class="form-control" id="id_inmu" name="id_inmu" placeholder="Ingrese el id del inmueble" value="<?php echo $row['id_inmu']; ?>"  required>
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