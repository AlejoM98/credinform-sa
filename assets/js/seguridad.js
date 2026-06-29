// VALIDAR QUE EL USUARIO HAYA INICIADO SESION

$.ajax({
    url: '../assets/ajax/seguridad.php',
    method: 'post',
    data: { validarInicioSesion: 1 },
    success: function(respuesta){
        if(respuesta=='false'){
            location.href='login.html';
        }
    }
});