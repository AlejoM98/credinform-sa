$(".add-new-product").css('cursor','pointer');

$(".add-new-product,.new-product").on('click',function(){
    $('.open_modal').trigger('click');
});

$('.crear-Producto').on('click',function(){
    if($('.nombre-producto').val()==''){
        $.notify('<i class="fa fa-bell-o"></i><strong>Error</strong> tiene que introducir un nombre valido.', {
            type: 'theme',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: true,
            timer: 300
        });
    }else{
        $.ajax({
            url: '../assets/ajax/producto.php',
            method: 'post',
            data: {
                crearProducto: 1, 
                nombre: $('.nombre-producto').val()
            },
            success: function(respuesta){
                if(respuesta=='true'){
                    $.notify('<i class="fa fa-bell-o"></i><strong>Listo</strong> el producto se ha creado.', {
                        type: 'theme',
                        allow_dismiss: true,
                        delay: 2000,
                        showProgressbar: true,
                        timer: 300
                    });
                    setTimeout(() => {
                        location.href = '../es/productos.php';
                    }, 1500);
                }
            }
        });
    }
});