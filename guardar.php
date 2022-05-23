<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	
	$id_pro = $_POST['id_pro'];
	$nom_pro = $_POST['nom_pro'];
	$num_cuen_pro = $_POST['num_cuen_pro'];
	$tel_pro = $_POST['tel_pro'];
	$email_pro = $_POST['email_pro'];
	$id_inmu = $_POST['id_inmu'];
	
	
	$sql = "INSERT INTO propietario (id_pro, nom_pro, num_cuen_pro, tel_pro, email_pro, id_inmu ) VALUES ('$id_pro', '$nom_pro', '$num_cuen_pro', '$tel_pro', '$email_pro')";
	$resultado=mysqli_query($conexion,$sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					

					<a href="nuevo.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
