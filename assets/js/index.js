'use strict';
$('.sidebarActive').addClass('active');
$(".logout").on('click',function(){
    $.ajax({
        url: '../assets/ajax/seguridad.php',
        method: 'post',
        data: { logout: 1 },
        success: function(respuesta){
            if(respuesta=='true'){
                var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Listo</strong> Su sesion ha sido cerrada...', {
                    type: 'theme',
                    allow_dismiss: true,
                    delay: 2000,
                    showProgressbar: true,
                    timer: 300
                });
                setTimeout(function(){
                    location.href='login.html';
                },1000);
            }
        }
    })
});