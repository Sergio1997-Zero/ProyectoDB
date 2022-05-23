<?php

	$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");

    $where = "";	

    $sql = "SELECT * FROM propietario";
   
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
                <h2 style="text-align: center">Inmobiliaria </h2>
            </div>

            <div class="row">
                <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a><br>

				<form action="" method="POST">
					<b>Nombre: </b><input type="text" id="cconsulta" name ="cconsulta"/>								
					<a href="" data-href="" data-toggle= "modal" data-target="#modal_Resultados"><span><input type="submit" value="Buscar" class="btn btn-info" />	</span></a>
				</form>


            </div>
            <br>

            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id_pro</th>
                        <th>nom_pro</th>
                        <th>num_cuen_pro</th>
                        <th>email_pro</th>
                        <th>id_inmu</th>
                        <th></th>
						<th></th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_pro']; ?></td>
								<td><?php echo $row['nom_pro']; ?></td>
								<td><?php echo $row['num_cuen_pro']; ?></td>
								<td><?php echo $row['email_pro']; ?></td>
                                <td><?php echo $row['id_inmu']; ?></td>
                                <td><a href="modificar.php?id_pro=<?php echo $row['id_pro']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
	
								<td><a href="#" data-href="eliminar.php?id_pro=<?php echo $row['id_pro'];?>" data-toggle= "modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
			
		<!-- Modal -->
		<div class="modal fade" id_pro="confirm-delete" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id_pro="myModalLabel">Eliminar Registro</h4>
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
						<h4 class="modal-title" id_pro="myModalLabel">Resultado</h4>
					</div>	
					<div class="modal-body">
						<div class="row table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
									<th>id_pro</th>
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
									$consulta = $_POST["cconsulta"];
									$sqlito = "SELECT * FROM propietario WHERE id_pro LIKE '%$consulta%'";
   									$resultadito=mysqli_query($conexion,$sqlito);
									
									 while($row = $resultadito->fetch_array(MYSQLI_ASSOC)) { ?>
										<tr>
										<td><?php echo $row['id_pro']; ?></td>
										<td><?php echo $row['nom_pro']; ?></td>
										<td><?php echo $row['num_cuen_pro']; ?></td>
										<td><?php echo $row['email_pro']; ?></td>
										<td><?php echo $row['id_inmu']; ?></td>					

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

		
