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
			
			<form class="form-horizontal" method="POST" action="guardar_inmu.php" autocomplete="off">

				
				<div class="form-group">
					<label for="direc_inmu" class="col-sm-2 control-label">Dirreción</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direc_inmu" name="direc_inmu" placeholder="Ingrese la dirección ">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tip_inmu" class="col-sm-2 control-label">Tipo de inmueble</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tip_inmu" name="tip_inmu" placeholder="Ingrese el tipo de inmueble">
					</div>
				</div>

				<div class="form-group">
					<label for="arri_inmu" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="arri_inmu" name="arri_inmu" placeholder="Ingrese el precio">
					</div>
				</div>

				<div class="form-group">
					<label for="cant_habi" class="col-sm-2 control-label">habitaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cant_habi" name="cant_habi" placeholder="Ingrese cantidad de habitaciones">
					</div>
				</div>

				<div class="form-group">
					<label for="cant_bano" class="col-sm-2 control-label">baños</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cant_bano" name="cant_bano" placeholder="Ingrese cantidad de baños ">
					</div>
				</div>
				<div class="form-group">
					<label for="parq_inmu" class="col-sm-2 control-label">parqueaderos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="parq_inmu" name="parq_inmu" placeholder="Ingrese cantidad de parqueados">
					</div>
				</div>
				<div class="form-group">
					<label for="cont_cocina" class="col-sm-2 control-label">cocinas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cont_cocina" name="cont_cocina" placeholder="Ingrese cantidad de cocinas">
					</div>
				</div>
				<div class="form-group">
					<label for="id_arren" class="col-sm-2 control-label">Id Arrendatario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_arren" name="id_arren" placeholder="Ingrese el arrendatario">
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