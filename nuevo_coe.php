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
			
			<form class="form-horizontal" method="POST" action="guardar_coe.php" autocomplete="off">

				
				<div class="form-group">
					<label for="nom_cod" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nom_cod" name="nom_cod" placeholder="ingrese el nombre de codeudor">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tel_cod" class="col-sm-2 control-label">Telefono </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tel_cod" name="tel_cod" placeholder="Ingrese el telefono del codeudor">
					</div>
				</div>

				<div class="form-group">
					<label for="cont_cod" class="col-sm-2 control-label">Tipo de contrato</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cont_cod" name="cont_cod" placeholder="ingrese el tipo de contrato">
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_cod" class="col-sm-2 control-label">id codeudor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_cod" name="id_cod" placeholder="Ingrese el id del codeudor">
					</div>
				</div>

				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">Id arrendatario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="ingrese el id del arrendatario" >
					</div>
				</div>
				


				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="codeudor.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
    </body>
</html>