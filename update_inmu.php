<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
    
	$id_inmu = $_POST['id_inmu'];
    $direc_inmu = $_POST['direc_inmu'];    
	$tip_inmu = $_POST['tip_inmu'];
	$arri_inmu = $_POST['arri_inmu'];
	$cant_habi = $_POST['cant_habi'];
	$cant_bano = $_POST['cant_bano'];
	$parq_inmu = $_POST['parq_inmu'];
	$cont_cocina = $_POST['cont_cocina'];
	$id_arren = $_POST['id_arren'];

	
	
	$sql = "UPDATE inmueble SET direc_inmu='$direc_inmu', tip_inmu='$tip_inmu', arri_inmu='$arri_inmu', cant_habi='$cant_habi' ,cant_bano='$cant_bano', parq_inmu='$parq_inmu', cont_cocina='$cont_cocina', id_arren='$id_arren'   WHERE id_inmu='$id_inmu'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
                    <a href="inmuebles.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>