<?php

	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");

    $where = "";	

    $sql = "SELECT * FROM pagos";
   
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
                <h2 style="text-align: center">Pagos</h2> </h2>
            </div>

            <div class="row">
                <a href="nuevo_pagos.php" class="btn btn-primary">Nuevo Registro</a><br>




            </div>
            <br>

            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id_pago</th>
                        <th>fec_pag_inmu</th>
                        <th>mont_pag</th>
                        <th>tip_pag</th>
                        <th></th>
						<th></th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_pago']; ?></td>
								<td><?php echo $row['fec_pag_inmu']; ?></td>
								<td><?php echo $row['mont_pag']; ?></td>
								<td><?php echo $row['tip_pag']; ?></td>
                                <td><a href="modificar_pagos.php?id_pago=<?php echo $row['id_pago']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
	
								<td><a href="#" data-href="eliminar_pagos.php?id_pago=<?php echo $row['id_pago'];?>" data-toggle= "modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
			
		<!-- Modal -->
		<div class="modal fade" id_pago="confirm-delete" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id_pago="myModalLabel">Eliminar Registro</h4>
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


		
		<script>
			$('#confirm-delete').on('shown.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		

	</body>
</html>	

		