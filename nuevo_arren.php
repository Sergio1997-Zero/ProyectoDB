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
			
			<form class="form-horizontal" method="POST" action="guardar_arren.php" autocomplete="off">
				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">id</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="Ingrese el id del arrendatario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nom_arren" class="col-sm-2 control-label">Nombre arrendatario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nom_arren" name="nom_arren" placeholder="Ingrese el nombre del arrendatario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tel_arren" class="col-sm-2 control-label">numero de telefono</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tel_arren" name="tel_arren" placeholder="Ingrese el numero de telefono del arrendatario">
					</div>
				</div>

				<div class="form-group">
					<label for="num_cuen" class="col-sm-2 control-label">Numero de cuenta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="num_cuen" name="num_cuen" placeholder="Ingrese el telefono del arrendatario">
					</div>
				</div>

				<div class="form-group">
					<label for="tiempo_cont" class="col-sm-2 control-label">Tiempo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tiempo_cont" name="tiempo_cont" placeholder="Ingrese el tiempo del arriendo">
					</div>
				</div>

				<div class="form-group">
					<label for="num_cedula" class="col-sm-2 control-label">Id cedula</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="num_cedula" name="num_cedula" placeholder="Ingrese el numero de cedula">
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