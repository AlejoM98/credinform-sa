<?php
include('./conexion.php');
if(isset($_POST['persona'])){
    $sql = "";
    $resultado = "";
    $respuesta = array();
    if($_POST['persona'] == 'natural'){
        $clienteQUery = mysqli_query($con, "SELECT * FROM afianzado a JOIN persona_natural p ON a.ID_Persona_Natura=p.ID_Persoan_Natura");
        $resultado = '<option>SELECCIONE</option>';
        // print_r($clienteQUery);
        while($dataCliente = mysqli_fetch_array($clienteQUery)){
            $array_temp = array( 'name' => $dataCliente['Nombres'] , 'value' => $dataCliente['ID_Persona_Natura'] );
            array_push($respuesta, $array_temp);
        }   
    }else{
        $clienteQUery = mysqli_query($con, "SELECT * FROM afianzado a JOIN persona_juridica p ON a.ID_Per_Ju=p.ID_Per_Ju");    
        $resultado = '<option>SELECCIONE</option>';
        // print_r($clienteQUery);
        while($dataCliente = mysqli_fetch_array($clienteQUery)){ 
            $array_temp = array( 'name' => $dataCliente['Nombre'] , 'value' => $dataCliente['ID_Per_Ju'] );     
            array_push($respuesta, $array_temp);
        }
    }
    // echo $resultado;
    print_r(json_encode($respuesta));
}else if(isset($_POST['id'])){
    $polizaQuery = mysqli_query($con ,"SELECT * FROM poliza WHERE nro_poliza='".$_POST['id']."' ");
    echo (mysqli_num_rows($polizaQuery)>0) ? 'true' : 'false';
    // print_r(($polizaQuery));
}else if(isset($_POST['add'])){
// cod_poliza: $("#textinputPoliza").val(),
// afianzado: $("#ClienteSelect").val(),
// actividad: $("#actividadInput").val(),
// fechaIni: $("#fechaIni").val(),
// fechaFin: $("#fechaFin").val(),
// estado: $("#estadoInput").val(),	
// detalle: $("#detalleInput").val()
    mysqli_query($con, " INSERT INTO `poliza` (`Cod_Poliza`, `nro_poliza`, `ID_Afianzado`, `Actividad`, `Fecha_Ini`, `Fecha_Fin`, `ID_Estado`, `Detalle`) VALUES (NULL, '".$_POST['cod_poliza']."', '".$_POST['afianzado']."', '".$_POST['actividad']."', '".$_POST['fechaIni']."', '".$_POST['fechaFin']."', '".$_POST['estado']."', '".$_POST['detalle']."'); ");
    echo "true";
}

?>