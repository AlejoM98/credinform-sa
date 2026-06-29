<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>CREDINFORM</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <style>
      
    </style>
  </head>
  <body style="padding: 20px 45px 20px 45px;">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>         
        <div class="form-horizontal">
            <fieldset>
            
            <!-- Form Name -->
            <h6 class="m-t-10">Poliza</h6><hr>
            
            <!-- Text input-->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="textinput">Codigo de Poliza</label>  
              <div class="col-lg-12">
              <input id="textinputPoliza" name="textinput" type="text" placeholder="CIP-LPE0210335" class="form-control btn-square input-md" required>
              </div>
            </div>

            <!-- Select Basic -->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="selectbasic">Tipo Cliente</label>
              <div class="col-lg-12">
                <select id="personaSelect" name="selectbasic" class="form-control btn-square">
                  <option value="1">Persona Juridica</option>
                  <option value="2">Persona Natural</option>
                </select>
              </div>
            </div>

            <!-- Select Basic -->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="selectbasic">Cliente</label>
              <div class="col-lg-12">
                <select id="ClienteSelect" name="selectbasic" class="form-control btn-square">                  
                </select>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="textinput">Activida</label>  
              <div class="col-lg-12">
              <input id="actividadInput" name="textinput" type="text" placeholder="Actividad" class="form-control btn-square input-md"> 
              </div>
            </div>
            
            <!-- Text input-->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="textinput">Fecha Inicio</label>  
              <div class="col-lg-12">
              <input id="fechaIni" name="textinput" type="date" placeholder="placeholder" class="form-control btn-square input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="textinput">Fecha Final</label>  
              <div class="col-lg-12">
              <input id="fechaFin" name="textinput" type="Date" placeholder="placeholder" class="form-control btn-square input-md" required>
              </div>
            </div>
             <!-- Select Basic -->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="selectbasic">Estado</label>
              <div class="col-lg-12">
                <select id="estadoInput" name="selectbasic" class="form-control btn-square" required>
                  <option value="1">Evaluado</option>
                  <option value="2">Comite</option>
                  <option value="3">Cierre</option>
                  <option value="4">Ejecutado</option>
                  <option value="5">Devengado</option>
                </select>
              </div>
            </div>
            <!-- Text input-->
            <div class="mb-3 row">
              <label class="col-lg-12 form-label " for="textinput">Detalle</label>  
              <div class="col-lg-12">
              <input id="detalleInput" name="textinput" type="text" placeholder="Detalle" class="form-control btn-square input-md" required>
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="mb-3 row mb-0">
              <label class="col-lg-12 form-label " for="button1id">Opciones</label>
              <div class="col-md-9">
                <button id="button-add" name="button1id" type="button" class="btn btn-primary">Agregar</button>
                <button id="button-cancelar" name="button2id" type="button" class="btn btn-danger" href = "../es/kanban.php">Cancelar</button>
              </div>
            </div>
            
            </fieldset>
        </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/form-validation-custom.js" ></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
  <script>
    $("#personaSelect").on("change", function(){
      var tipo = ($(this).val() == "2") ? "natural" : "juridico";
      $.ajax({
        url: "../assets/ajax/poliform.php",
        method: "POST",
        data:{
          persona: tipo
        },
        success: function(data){
          console.log(JSON.parse(data));
          data = JSON.parse(data);
          $("#ClienteSelect").html('');
          for(var i = 0; i < data.length; i++){
            $("#ClienteSelect").append($('<option value="'+data[i]['value']+'">'+data[i]['name']+'</option>'));
            console.log('<option value="'+ data[i]['value'] +'">'+ data[i]['name'] +'</option>');
          }
        }
      });
    });
    $("#textinputPoliza").on('keyup',function(){
      var poliza = $(this).val();
      $.ajax({
        url: '../assets/ajax/poliform.php',
        method: 'POST',
        data: {
          id: poliza
        },
        success: function(data){
          console.log(data);
          if(data=='true'){
            $.notify('Numero de poliza existente...', {
              type: 'theme',
              allow_dismiss: true,
              delay: 2000,
              showProgressbar: true,
              timer: 1000
            });
            $("#textinputPoliza").val(' ');
          }
        }
      });
    });
    var d = new Date();
    var limite = d.getFullYear() + '-' + d.getMonth() + '-' + d.getDay();
    $("#fechaIni").attr('max', limite);
    $("#fechaFin").attr('min', limite);
    $('#button-add').on('click',function(){
      $.ajax({
        url: '../assets/ajax/poliform.php',
        method: 'POST',
        data: {
          add: 1,
          cod_poliza: $("#textinputPoliza").val(),
          afianzado: $("#ClienteSelect").val(),
          actividad: $("#actividadInput").val(),
          fechaIni: $("#fechaIni").val(),
          fechaFin: $("#fechaFin").val(),
          estado: $("#estadoInput").val(),	
          detalle: $("#detalleInput").val()
        },
        success: function(data){
          console.log(data);
          if(data=='true'){
            // window.close();
          }
        }
      });
    });
    $("#button-cancelar").on("click", function(){       
      window.close();      
    })
  </script>
</html>

