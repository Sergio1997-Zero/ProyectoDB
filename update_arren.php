<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
    
	$id_arren = $_POST['id_arren'];
    $nom_arren = $_POST['nom_arren'];    
	$tel_arren = $_POST['tel_arren'];
	$num_cuen = $_POST['num_cuen'];
	$tiempo_cont = $_POST['tiempo_cont'];
	$num_cedula = $_POST['num_cedula'];

	
	
	$sql = "UPDATE arrendatarios SET nom_arren='$nom_arren', tel_arren='$tel_arren', num_cuen='$num_cuen', tiempo_cont='$tiempo_cont', num_cedula='$num_cedula' WHERE id_arren='$id_arren'";
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
                    <a href="arrendatarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>