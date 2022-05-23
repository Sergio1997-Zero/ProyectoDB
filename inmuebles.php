<?php

$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");


    $sql = "SELECT * FROM inmueble";

    
   
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
        <h2 style="text-align: center">inmuebles</h2>
        <form method ="POST">
        <div class="input-group-mb-3">
        <a href="nuevo_inmu.php" class="btn btn-primary">Nuevo Registro</a><br>

            <div class="input-group-append">
                
            </div>
        </div>
         </form  
                <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id_inmu</th>
                        <th>direc_inmu</th>
                        <th>tip_inmu</th>
                        <th>arri_inmu</th>
                        <th>cant_habi</th>
						<th>cant_bano</th>
						<th>parq_inmu</th>
                        <th>cont_cocina</th>
                        <th>id_arren</th>
                        <th></th>
                        <th></th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_inmu']; ?></td>
								<td><?php echo $row['direc_inmu']; ?></td>
								<td><?php echo $row['tip_inmu']; ?></td>
								<td><?php echo $row['arri_inmu']; ?></td>
                                <td><?php echo $row['cant_habi']; ?></td>
                                <td><?php echo $row['cant_bano']; ?></td>
                                <td><?php echo $row['parq_inmu']; ?></td>
                                <td><?php echo $row['cont_cocina']; ?></td>
                                <td><?php echo $row['id_arren']; ?></td>

								<td><a href="modificar_inmu.php?idCliente=<?php echo $row['id_inmu']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar_inmu.php?id_inmu=<?php echo $row['id_inmu'];?>" data-toggle= "modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                                
							</tr>
                        <?php } ?>
					</tbody>
				</table>
                
			    </div>
		</div>
    <!-- Modal -->
		<div class="modal fade" id_inmu="confirm-delete" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id_inmu="myModalLabel">Eliminar Registro</h4>
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
    </div>
    <script>
			$('#confirm-delete').on('shown.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
    </body>

</html>	

		
