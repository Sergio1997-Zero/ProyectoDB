<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
	
	$direc_inmu = $_POST['direc_inmu'];
	$tip_inmu = $_POST['tip_inmu'];
	$arri_inmu = $_POST['arri_inmu'];
	$cant_habi = $_POST['cant_habi'];
	$cant_bano = $_POST['cant_bano'];
	$parq_inmu = $_POST['parq_inmu'];
	$cont_cocina = $_POST['cont_cocina'];
	$id_arren = $_POST['id_arren'];
	
	
	$sql = "INSERT INTO inmueble (direc_inmu, tip_inmu, arri_inmu, cant_habi, cant_bano, parq_inmu,cont_cocina,id_arren ) VALUES ('$direc_inmu', '$tip_inmu', '$arri_inmu', '$cant_habi', '$cant_bano','$parq_inmu','$cont_cocina','$id_arren' )";
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
					

					<a href="inmuebles.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
