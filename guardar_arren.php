<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	
	$id_pro = $_POST['id_arren'];
	$nom_pro = $_POST['nom_arren'];
	$num_cuen_pro = $_POST['tel_arren'];
	$tel_pro = $_POST['num_cuen'];
	$email_pro = $_POST['tiempo_cont'];
	$id_inmu = $_POST['num_cedula'];
	
	
	$sql = "INSERT INTO arrendatarios ( nom_arren, tel_arren, num_cuen, tiempo_cont, num_cedula ) VALUES ('$nom_pro', '$num_cuen_pro', '$tel_pro', '$email_pro','$id_inmu')";
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
					

					<a href="arrendatarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
