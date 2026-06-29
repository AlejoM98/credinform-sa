<?php
session_start();
include('../assets/ajax/conexion.php');
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
            <div class="logo-wrapper"><a href="../es/"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="../es/"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <!-- <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Buscar.....">
                  </div> -->
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
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
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>              
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
              <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['usrData'][2] . ' ' . $_SESSION['usrData'][1];?></h6></a>
            <p class="mb-0 font-roboto"><?php echo $_SESSION['usrData'][0];?></p>
            <ul>
              <li><span><span class="counter"><?php echo $_SESSION['usrData'][4];?></span></span>
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
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="../es/"><i data-feather="home"></i><span>Dashboard</span></a></li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>Productos             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="./productos.php"><i data-feather="package"></i><span>Productos</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Unidades</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="./unidades.php">Lista</a></li>
                      <li><a href="./entradas.php">Entradas</a></li>
                      <li><a href="./salidas.php">Salidas</a></li>                      
                    </ul>
                  </li>                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Perfil</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="../es/edit-profile.php"><i data-feather="user"></i><span>Configuracion</span></a></li>
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
                <div class="col-sm-6">
                  <h3>Editar Usuario</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../es/">Home</a></li>
                    <li class="breadcrumb-item">Usuarios</li>
                    <li class="breadcrumb-item active">Editar Usuario</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">Perfil de Usuario</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div>
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="media">                        <img class="img-70 rounded-circle" alt="" src="../assets/images/dashboard/1.png">
                              <div class="media-body">
                                <h3 class="mb-1 f-20 txt-primary"><?php echo $_SESSION['usrData'][2] . ' ' . $_SESSION['usrData'][3] . ', ' . $_SESSION['usrData'][1];?></h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Correo Electronico</label>
                              <input class="form-control" placeholder="your-email@domain.com" value="<?php echo $_SESSION['usuario'];?>" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">                            
                            <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input class="form-control" type="password" value="" placeholder="********">
                            </div>
                          </div>                          
                          <div class="col-md-6">  
                            <div class="mb-3">
                              <label class="form-label">Nombre</label>
                              <input class="form-control" placeholder="your-email@domain.com" value="<?php echo $_SESSION['usrData'][1];?>">
                            </div>
                          </div>         
                          <div class="col-md-6"> 
                            <div class="mb-3">
                              <label class="form-label">Celular</label>
                              <input class="form-control" placeholder="your-email@domain.com" value="<?php echo $_SESSION['usrData'][4];?>">
                            </div>  
                          </div>    
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Apellido Paterno</label>
                              <input class="form-control" placeholder="your-email@domain.com" value="<?php echo $_SESSION['usrData'][2];?>">
                            </div>
                          </div>    
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Apellido Materno</label>
                              <input class="form-control" placeholder="your-email@domain.com" value="<?php echo $_SESSION['usrData'][3];?>">
                            </div>
                          </div>
                          <br>
                          <div class="form-footer">
                            <button class="btn btn-primary btn-block">Actualizar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5">
                  <form class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">Editar Datos de la Licoreria</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label class="form-label">Nombre de la Licoreria</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>                        
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
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
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>