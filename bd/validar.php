<?php

$Usuario=$_POST['user'];
$Contraseña=$_POST['contrasenia'];

session_start();
$_SESSION['usuario']=$Usuario;

$conexion=mysqli_connect("localhost","user","0707","inmobiliaria");

$consulta="SELECT * FROM usuarios where nom_user='$Usuario' and pas_user='$Contraseña' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);


if ($filas['tip_user']=='admin'){ //administrador
    header("location:admin.php");
    
}else if ($filas['tip_user']=='user')
{ //invitado
    header("location:invitado.php");
}

else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
