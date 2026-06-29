<?php
session_start();
include('../assets/ajax/conexion.php');

$queryEvaluado = mysqli_query($con, "SELECT * FROM poliza WHERE ID_Estado='1' ");
if(mysqli_num_rows($queryEvaluado) <= 0){
  echo "<script>";
  echo "var itemEvaluado = [];";
  echo "</script>";
}else{
  echo "<script>";
  echo "var itemEvaluado = [];";
  echo "var date1 = new Date();";
  echo "</script>";
  while($datoEvaluado = mysqli_fetch_assoc($queryEvaluado)){
    echo "<script>";    
    echo "var date2 = new Date('".$datoEvaluado['Fecha_Fin']."');";
    echo "var diffTime = Math.abs(date2 - date1);";
    echo "var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); ";  
    echo "var tiempoFaltante = (diffDays < 10) ? 'Urgente' : 'Pendiente' ;";  
    echo "var tiempoFaltanteColor = (diffDays < 10) ? 'danger' : 'warning' ;";  
    echo 'itemEvaluado.push({"title": ` <a class="kanban-box" id="'.$datoEvaluado['Cod_Poliza'].'" href="#"><span class="date">'.$datoEvaluado['Fecha_Ini'].'</span><span class="badge badge-`+tiempoFaltanteColor+` f-right">`+tiempoFaltante+`</span><h6>'.$datoEvaluado['nro_poliza'].'</h6><div class="media"><p>'.$datoEvaluado['Detalle'].'</p></div></div><div class="d-flex mt-3"><ul class="list"><li><i class="fa fa-comments-o"></i>2</li><li><i class="fa fa-paperclip"></i>2</li><li><i class="fa fa-eye"></i></i></li></ul><div class="customers"><ul><li class="d-inline-block me-3"><p class="f-12">+5</p></li></ul></div></div></a> ` });';
    echo "</script>";
  }
}

$queryComite = mysqli_query($con, "SELECT * FROM poliza WHERE ID_Estado='2' ");
if(mysqli_num_rows($queryComite) <= 0){
  echo "<script>";
  echo "var Comite = [];";
  echo "</script>";
}else{
  echo "<script>";
  echo "var Comite = [];";
  echo "var date11 = new Date();";
  echo "</script>";
  while($datoComite = mysqli_fetch_assoc($queryComite)){
    echo "<script>";    
    echo "var date2 = new Date('".$datoComite['Fecha_Fin']."');";
    echo "var diffTime = Math.abs(date2 - date11);";
    echo "var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); ";  
    echo "var tiempoFaltante = (diffDays < 10) ? 'Urgente' : 'Pendiente' ;";  
    echo "var tiempoFaltanteColor = (diffDays < 10) ? 'danger' : 'warning' ;";  
    echo 'Comite.push({"title": ` <a class="kanban-box" id="'.$datoComite['Cod_Poliza'].'" href="#"><span class="date">'.$datoComite['Fecha_Ini'].'</span><span class="badge badge-`+tiempoFaltanteColor+` f-right">`+tiempoFaltante+`</span><h6>'.$datoComite['nro_poliza'].'</h6><div class="media"><p>'.$datoComite['Detalle'].'</p></div></div><div class="d-flex mt-3"><ul class="list"><li><i class="fa fa-comments-o"></i>2</li><li><i class="fa fa-paperclip"></i>2</li><li><i class="fa fa-eye"></i></i></li></ul><div class="customers"><ul><li class="d-inline-block me-3"><p class="f-12">+5</p></li></ul></div></div></a> ` });';    
    echo "</script>";
  }
}

$queryCierre = mysqli_query($con, "SELECT * FROM poliza WHERE ID_Estado='3' ");
if(mysqli_num_rows($queryCierre) <= 0){
  echo "<script>";
  echo "var Cierre = [];";
  echo "</script>";
}else{
  echo "<script>";
  echo "var Cierre = [];";
  echo "var date111 = new Date();";
  echo "</script>";
  while($datoCierre = mysqli_fetch_assoc($queryCierre)){
    echo "<script>";    
    echo "var date2 = new Date('".$datoCierre['Fecha_Fin']."');";
    echo "var diffTime = Math.abs(date2 - date111);";
    echo "var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); ";  
    echo "var tiempoFaltante = (diffDays < 10) ? 'Urgente' : 'Pendiente' ;";  
    echo "var tiempoFaltanteColor = (diffDays < 10) ? 'danger' : 'warning' ;";  
    echo 'Cierre.push({"title": ` <a class="kanban-box" id="'.$datoCierre['Cod_Poliza'].'" href="#"><span class="date">'.$datoCierre['Fecha_Ini'].'</span><span class="badge badge-`+tiempoFaltanteColor+` f-right">`+tiempoFaltante+`</span><h6>'.$datoCierre['nro_poliza'].'</h6><div class="media"><p>'.$datoCierre['Detalle'].'</p></div></div><div class="d-flex mt-3"><ul class="list"><li><i class="fa fa-comments-o"></i>2</li><li><i class="fa fa-paperclip"></i>2</li><li><i class="fa fa-eye"></i></i></li></ul><div class="customers"><ul><li class="d-inline-block me-3"><p class="f-12">+5</p></li></ul></div></div></a> ` });';
    echo "</script>";
  }
}

$queryEjecutado = mysqli_query($con, "SELECT * FROM poliza WHERE ID_Estado='4' ");
if(mysqli_num_rows($queryEjecutado) <= 0){
  echo "<script>";
  echo "var Ejecutado = [];";
  echo "</script>";
}else{
  echo "<script>";
  echo "var Ejecutado = [];";
  echo "var date1111 = new Date();";
  echo "</script>";
  while($datoEjecutado = mysqli_fetch_assoc($queryEjecutado)){
    echo "<script>";    
    echo "var date2 = new Date('".$datoEjecutado['Fecha_Fin']."');";
    echo "var diffTime = Math.abs(date2 - date1111);";
    echo "var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); ";  
    echo "var tiempoFaltante = (diffDays < 10) ? 'Urgente' : 'Pendiente' ;";  
    echo "var tiempoFaltanteColor = (diffDays < 10) ? 'danger' : 'warning' ;";  
    echo 'Ejecutado.push({"title": ` <a class="kanban-box" id="'.$datoEjecutado['Cod_Poliza'].'" href="#"><span class="date">'.$datoEjecutado['Fecha_Ini'].'</span><span class="badge badge-`+tiempoFaltanteColor+` f-right">`+tiempoFaltante+`</span><h6>'.$datoEjecutado['nro_poliza'].'</h6><div class="media"><p>'.$datoEjecutado['Detalle'].'</p></div></div><div class="d-flex mt-3"><ul class="list"><li><i class="fa fa-comments-o"></i>2</li><li><i class="fa fa-paperclip"></i>2</li><li><i class="fa fa-eye"></i></i></li></ul><div class="customers"><ul><li class="d-inline-block me-3"><p class="f-12">+5</p></li></ul></div></div></a> ` });';
    echo "</script>";
  }
}
// [{
//   'title': `
                      //  <a class="kanban-box" href="#"><span class="date">24/7/20</span><span class="badge badge-info f-right">medium</span>
                      //   <h6>Test Sidebar</h6>
                      //   <div class="media"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                      //     <div class="media-body">
                      //       <p>Themeforest, australia</p>
                      //     </div>
                      //   </div>
                      //   <div class="d-flex mt-3">
                      //     <ul class="list">
                      //       <li><i class="fa fa-comments-o"></i>2</li>
                      //       <li><i class="fa fa-paperclip"></i>2</li>
                      //       <li><i class="fa fa-eye"></i></i></li>
                      //     </ul>
                      //     <div class="customers">
                      //       <ul>
                      //         <li class="d-inline-block me-3">
                      //           <p class="f-12">+5</p>
                      //         </li>
                      //         <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                      //         <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                      //         <li class="d-inline-block"><img class="img-20 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                      //       </ul>
                      //     </div>
                      //   </div></a>
//                     `,
// }
// ]

?>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/jkanban.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <!--form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </!--form--><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <!--li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </!--li-->
              <!--li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <!--ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </!--ul-->
              </!--li-->
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <!--li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </!--li-->
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light logout" type="button"><a href="#"><i data-feather="log-out"></i>Cerrar Sesion</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['usuario'];?></h6></a>
            <p class="mb-0 font-roboto"><?php echo $_SESSION['usuario'];?></p>
            <ul>
              <li><span><span><?php echo $_SESSION['usuario'];?></span></span>
                <p>Celular</p>
              </li>
            </ul>
          </div>
          
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="active sidebarActive nav-link menu-title link-nav" href="../es/"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  </li>

                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="./kanban.php"><i data-feather="monitor"></i><span>Tablero de control</span></a></li>
                          
                  <!--li class="sidebar-main-title">
                    <div>
                      <h6>Perfil</h6>
                    </div>
                  </!--li-->
                  <!--li class="dropdown"><a class="nav-link menu-title link-nav" href="../es/edit-profile.php"><i data-feather="user"></i><span>Configuracion</span></a></!--li-->
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <!--div class="col-sm-6">
                  <h3>kanban board</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">apps</li>
                    <li class="breadcrumb-item active">kanban board</li>
                  </ol>
                </!--div-->
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!--div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </!--div-->
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid jkanban-container">
            <div class="row">             
              <div class="col-12 colorfull-kanban">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Credinform SA</h5>
                    <p class="mb-0">| Poliza de Area de Cauciones                         </p>
                  </div>
                  <div class="card-body kanban-block">                    
                    <div class="kanban-block" id="demo2" style="display: flex !important;"></div>
                    <!--button-- class="btn btn-primary" id="addDefault">Add &quot;Default&quot; board</!--button-->
                    <button class="btn btn-primary" id="addToDo" href= "../es/PoliFom.html">Add element in &quot;To Do&quot; Board</button>
                    <!--button class="btn btn-danger mb-0" id="removeBoard">Remove &quot;Done&quot; Board</!--button-->
                  </div>
                </div>
              </div>              
              <div class="col-12">
                <!--div class="card note p-20">jKanban is Pure agnostic Javascript plugin for Kanban boards for more options please refer <a href="http://www.riccardotartaglia.it/jkanban/" target="_blank">jkanban Official site  </a>And <a href="https://github.com/riktar/jkanban" target="_blank">githup link</a></!--div--->
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
          
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0"><i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/seguridad.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script scr="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/jkanban/jkanban.js"></script>
    <script src="../assets/js/jkanban/custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>      
      $("#addToDo").on('click',function(){
        poliform = window.open('./PoliFom.php', "Formulario nueva poliza", "width=600,height=800,left=150,top=200,toolbar=1,status=1,");        
      });
    </script>
  </body>
</html>