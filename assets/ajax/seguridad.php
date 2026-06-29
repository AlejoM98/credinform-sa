<?php
session_start();
include('./conexion.php');
if(isset($_POST['validarInicioSesion'])){
    if(isset($_SESSION['usuario'])){
        echo 'true';
    }else{
        echo 'false';
    }
}
if(isset($_POST['login'])){
    $queryUsr = mysqli_query($con, "SELECT * FROM usuario WHERE Login='".$_POST['usr']."' AND Password='".$_POST['pwd']."' ");
    if(mysqli_num_rows($queryUsr) > 0){
        $dataUsr = mysqli_fetch_assoc($queryUsr);
        $_SESSION['usuario'] = $dataUsr['Login'];
        $_SESSION['idUsuario'] = $dataUsr['ID_Usuario'];
        // $_SESSION['usrData'] = array($dataUsr['correo'],$dataUsr['nombre'],$dataUsr['paterno'],$dataUsr['materno'],$dataUsr['celular']);
        echo 'true';
    }else{
        echo 'false';
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    echo 'true';
}

?>