<?php
session_start();
include('./conexion.php');
$JSONtrazabilidad = array(); 
$trazaQuery = mysqli_query($con, "SELECT * FROM Bitacora b JOIN usuario u ON b.usuario=u.Id_Usuario JOIN poliza p ON b.Cod_Poliza=p.Cod_Poliza");
while($trazadata = mysqli_fetch_assoc($trazaQuery)){
    $carril = '';
    if(explode(',',$trazadata['DML'])[0]=='1'){
    $carril = 'Evaluado';
    }else if(explode(',',$trazadata['DML'])[0]=='2'){
    $carril = 'Comite';
    }else if(explode(',',$trazadata['DML'])[0]=='3'){
    $carril = 'Cierre';
    }else if(explode(',',$trazadata['DML'])[0]=='4'){
    $carril = 'Ejecutado';
    }
    $array_temp = array(explode(',',$trazadata['DML'])[1], $trazadata['Login'], $trazadata['nro_poliza'], $carril);
    array_push($JSONtrazabilidad, ($array_temp));
}
$printData = array( "data" => ($JSONtrazabilidad) );
//echo "<pre>";
print_r(json_encode($printData));
//echo "</pre>";
?>
