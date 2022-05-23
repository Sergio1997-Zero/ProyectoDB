<?php
	
	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");
	
    
	$id_pago = $_POST['id_pago'];
    $fec_pag_inmu = $_POST['fec_pag_inmu'];    
	$mont_pag = $_POST['mont_pag'];
	$tip_pag = $_POST['tip_pag'];
	
	$sql = "UPDATE pagos SET id_pago='$id_pago', fec_pag_inmu='$fec_pag_inmu', mont_pag='$mont_pag', tip_pag='$tip_pag' WHERE id_pago='$id_pago'";
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
                    <a href="pagos.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>