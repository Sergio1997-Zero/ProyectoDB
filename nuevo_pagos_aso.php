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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar__pagos_aso.php" autocomplete="off">

				
				<div class="form-group">
					<label for="id_pago" class="col-sm-2 control-label">Id Pago</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_pago" name="id_pago" placeholder="ingrese el id del pago" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_inmu" class="col-sm-2 control-label">id Inmueble</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_inmu" name="id_inmu" placeholder="Ingrese el id del inmueble">
					</div>
				</div>


				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Pagos_asociados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
    </body>
</html>