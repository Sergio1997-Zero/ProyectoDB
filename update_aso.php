<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
    
	$nom_cod = $_POST['nom_cod'];
    $tel_cod = $_POST['tel_cod'];    
	$cont_cod = $_POST['cont_cod'];
	$id_cod = $_POST['id_cod'];
	$id_arren = $_POST['id_arren'];

	$sql = "UPDATE codeudor SET nom_cod='$nom_cod', tel_cod='$tel_cod', cont_cod='$cont_cod', id_cod='$id_cod', id_arren='$id_arren' WHERE id_cod='$id_cod'";
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
                    <a href="codeudor.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>