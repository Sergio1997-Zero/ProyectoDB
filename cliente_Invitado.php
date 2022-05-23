<?php

$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");


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
        <h2 style="text-align: center">Inmobiliaria</h2>
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
                        <th>idCliente</th>
                        <th>nomCliente</th>
                        <th>telCliente</th>
                        <th>correoCliente</th>
                        <th>direcCliente</th>

                        </tr>
                    </thead>
                    <tbody>
	                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_pro']; ?></td>
								<td><?php echo $row['nom_pro']; ?></td>
								<td><?php echo $row['num_cuen_pro']; ?></td>
								<td><?php echo $row['tel_pro']; ?></td>
                                <td><?php echo $row['email_pro']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>	
    </div>
    </body>
</html>	