'use strict';
$(".btn_sign_in").on('click',function(){
  if($(".usr").val()=='' || $('.password').val()==''){ alert('llenar todos los datos'); }
  else{
    $.ajax({
      url: '../assets/ajax/seguridad.php',
      method: 'post',
      data: { 
        login: 1,
        usr: $('.usr').val(),
        pwd: $('.password').val()
      },
      success: function(respuesta){
        console.log(respuesta);
        if(respuesta=='true'){
          location.href = '../es/kanban.php';
        }else{
          var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Error</strong> Usuario o contraseña incorrectos...', {
            type: 'theme',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: true,
            timer: 300
          });
        }
      }
    });
  }
});