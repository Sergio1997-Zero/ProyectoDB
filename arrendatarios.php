<?php

$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");


    $sql = "SELECT * FROM arrendatarios";

    
   
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

            <div class="input-group-append">
                
            </div>
        </div>
         </form  
            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id_arren</th>
                        <th>nom_arren</th>
                        <th>tel_arren</th>
                        <th>num_cuen</th>
                        <th>tiempo_cont</th>
						<th>num_cedula</th>
                        <th></th>
                        <th></th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_arren']; ?></td>
								<td><?php echo $row['nom_arren']; ?></td>
								<td><?php echo $row['tel_arren']; ?></td>
								<td><?php echo $row['num_cuen']; ?></td>
                                <td><?php echo $row['tiempo_cont']; ?></td>
                                <td><?php echo $row['num_cedula']; ?></td>

								<td><a href="modificar_arren.php?id_arren=<?php echo $row['id_arren']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar_inmu.php?id_arren=<?php echo $row['id_arren'];?>" data-toggle= "modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                                
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
    <!-- Modal -->
		<div class="modal fade" id_arren="confirm-delete" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id_arren="myModalLabel">Eliminar Registro</h4>
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

		
