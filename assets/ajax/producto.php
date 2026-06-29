<?php
session_start();
include('./conexion.php');
if(isset($_POST['crearProducto'])){
    mysqli_query($con, "INSERT INTO `producto` (`id`, `nombre`) VALUES (NULL, '".$_POST['nombre']."') ");
    echo 'true';
}
?>