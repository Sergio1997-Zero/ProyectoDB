<?php

    $conexion=mysqli_connect("localhost","eilyn","123456789","trabajofinalbd");

    $where = "";	

    $sql = "SELECT * FROM clientes ;
   
    $resultado=mysqli_query($conexion,$sql);

?>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css-bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
		</script>	
    </head>

    <body>

        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Inmobiliaria arrendatario </h2>
            </div>

            <div class="row">
                <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>

				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo"/>
					<input type="submit" id="enviar" id="enviar" value="Buscar" class="btn btn-info" data-toggle= "modal" data-target = "#modal_Resultados" />					
				</form><a href="#" data-href="<?php echo $row['campo']; ?>" data-toggle= "modal" data-target="#modal_Resultados"><span class="glyphicon glyphicon-trash"></span></a>


            </div>
            <br>

            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id_arren</th>
                        <th>nom_arren</th>
                        <th>tel_arren</th>
                        <th>num_cue_arren</th>
                        <th>tiemp_cont</th>
                        <th></th>
						<th></th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['idCliente']; ?></td>
								<td><?php echo $row['nomCliente']; ?></td>
								<td><?php echo $row['telCliente']; ?></td>
								<td><?php echo $row['correoCliente']; ?></td>
                                <td><?php echo $row['direcCliente']; ?></td>
                                <td><a href="modificar.php?idCliente=<?php echo $row['idCliente']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
	
								<td><a href="#" data-href="eliminar.php?idCliente=<?php echo $row['idCliente']; ?>" data-toggle= "modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
			
		<!-- Modal -->
		<div class="modal fade" idCliente="confirm-delete" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" idCliente="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade"  id="modal_Resultados"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" idCliente="myModalLabel">Resultado</h4>
					</div>	
					<div class="modal-body">
						<div class="row table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
									<th>idCliente</th>
									<th>nomCliente</th>
									<th>telCliente</th>
									<th>correoCliente</th>
									<th>direcCliente</th>
									<th></th>
									<th></th>

									</tr>
								</thead>
								<tbody>
									<?php
									$sqlito = "SELECT * FROM clientes WHERE nomCliente LIKE 'A%'";   
   									$resultadito=mysqli_query($conexion,$sqlito);
									
									 while($row = $resultadito->fetch_array(MYSQLI_ASSOC)) { ?>
										<tr>
											<td><?php echo $row['idCliente']; ?></td>
											<td><?php echo $row['nomCliente']; ?></td>
											<td><?php echo $row['telCliente']; ?></td>
											<td><?php echo $row['correoCliente']; ?></td>
											<td><?php echo $row['direcCliente']; ?></td>							

										</tr>
									<?php } ?>
								</tbody>
							</table>
			</div>		
					</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Finalizar</button>						
					</div>
				</div>
			</div>
			
		</div>
		
		<script>
			$('#confirm-delete').on('shown.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		

	</body>
</html>	

		
