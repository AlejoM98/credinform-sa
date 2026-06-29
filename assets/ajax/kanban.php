<?php
session_start();
include('./conexion.php');
$target = 0;
if( $_POST['target']=='_evaluados'){ $target = 1; }
else if( $_POST['target']=='_comite'){ $target = 2; }
else if( $_POST['target']=='_cierre'){ $target = 3; }
else if( $_POST['target']=='_ejecutado'){ $target = 4; }

$data = mysqli_query($con, "UPDATE `poliza` SET `ID_Estado` = '".$target."' WHERE `Cod_Poliza` = '".intval($_POST['elemento'])."'");
// print_r($_POST);
$dml = $target . ',' . $_POST['fecha'] . ' ' . $_POST['hora'] . ',' . $_SESSION['idUsuario'];
mysqli_query($con, "INSERT INTO `bitacora` (`ID_Bitacora`, `Cod_Poliza`, `Fecha`, `DML`, `usuario`, `ID_Menu`, `ID_Opcion`) VALUES (NULL, '".intval($_POST['elemento'])."', NULL, '".$dml."', '".$_SESSION['idUsuario']."', NULL, NULL)");
//print_r($_POST);
echo 'true';

?>