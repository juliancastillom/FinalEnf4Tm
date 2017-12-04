<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['idUser']) {
    header("Location:index.html");
} elseif ($_SESSION['type'] == "admin") {
    header("Location:indexAdmin.php");
}

$nameCat = $_GET['cat'];

?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nameApp |<?php echo $nameCat; ?></title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="inicioUsuario.js"></script>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <!------------------------------------- BARRA -------------------------------------->

    <header class="main-header">

        <!-- Logo -->
        <a href="inicioUsuario.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>n</b>App</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg" href="inicioUsuario.php"><b></b>nameApp</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <!-------------------------- MENSAJES ----------------------------------------------->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-------------------------- FIN MENSAJES ----------------------------------------------->
                    <!-------------------------- NOTIFICAIONES ----------------------------------------------->
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">Ver</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <!-------------------------- FIN NOTIFICACIONES----------------------------------------------->

                    <!-------------------------- DATOS USUARIO ----------------------------------------------->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $_SESSION['name'] . " " . $_SESSION['lastName']; ?>
                                    <small></small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="cerrarSesion.php" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <!-------------------------- FIN DATOS USUARIO ----------------------------------------------->


                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <!------------------------------------- FIN BARRA -------------------------------------->


    <!----------------------------- MENU DE NAVEGACION ------------------------------>

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION['name']; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->


            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU DE NAVEGACION</li>


                <li>
                    <a href="inicioUsuario.php">
                        <i class="fa fa-university"></i> <span>Inicio</span>
            <span class="pull-right-container">  
            </span>
                    </a>
                </li>


                <li>
                    <a href="perfil.php">
                        <i class="fa fa-user"></i>
                        <span>Perfil</span>
            <span class="pull-right-container">
            </span>
                    </a>
                </li>


                <li>
                    <a href="favoritos.php">
                        <i class="fa fa-bars"></i> <span>Favoritos</span>
            <span class="pull-right-container">
            </span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-search"></i>
                        <span>Buscar Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pageCategoria.php?cat=Teorico" id="buscarTeorico" ><i class="fa fa-circle-o"></i> Teorico</a></li>
                        <li><a href="pageCategoria.php?cat=Practico" id="buscarPractico" ><i class="fa fa-circle-o"></i> Practico</a></li>
                        <li><a href="pageCategoria.php?cat=Ejercicios" id="buscarEjercicios"><i class="fa fa-circle-o"></i> Ejercicios</a></li>
                        <li><a href="pageCategoria.php?cat=Documentales" id="buscarDocumentales"><i class="fa fa-circle-o"></i> Documentales</a></li>
                        <li><a href="pageCategoria.php?cat=Biografias"" id="buscarBiografias" ><i class="fa fa-circle-o"></i> Biografias</a></li>
                    </ul>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!------------------------------- FIN MENU DE NAVEGACION ------------------------------>


    <!------------------------------------  INFORMACION - Noticias---------------------------------- >


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <!---------------------------
            <h1>
                Teoricos
                <small></small>
            </h1>
            ----------------------------->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
                <h3 class="widget-user-username"><?php echo $nameCat; ?></h3>
                <h5 class="widget-user-desc">Enfasis 4 - Telematica</h5>
            </div>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Inicio</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">




                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!------------------
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">MIEMBROS</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                  <span class="progress-description">
                    
                  </span>
                        </div>

                    </div>
                    ---------------------->

                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!----------------------------
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">VISITAS</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                  <span class="progress-description">
                  
                  </span>
                        </div>

                    </div>
                    ------------------------------>

                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-------------------------
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">LIKES</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                  <span class="progress-description">
                    
                  </span>
                        </div>

                    </div>
                    ----------------------------->

                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-----------------------------------
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-thumbs-o-down"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">DIS-LIKES</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                  <span class="progress-description">

                  </span>
                        </div>

                    </div>
                    --------------------------------------->

                </div>



            </div>


            <!-----------------------------  FIN INFORMACION - Noticias-------------------------------- >

            <!-----------------------------  PUBLICIDAD -------------------------------------- >


            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">


                        <div class="box-header with-border">
                            <h3 class="box-title">PUBLICIDAD</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <iframe width="100%" style="height: auto;"
                                            src="https://www.youtube.com/embed/HBRQO91HcWw?rel=0"
                                            frameborder="0" gesture="media" allowfullscreen></iframe>
                                </div>


                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>De tu interes</strong>
                                    </p>

                                    <div class="progress-group">
                                        <span class="progress-text">Likes</span>
                                        <span class="progress-number"><b>310</b>/400</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                        </div>
                                    </div>


                                    <div class="progress-group">
                                        <span class="progress-text">Dis - Likes</span>
                                        <span class="progress-number"><b>480</b>/800</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-----------------------------  FIN PUBLICIDAD -------------------------------- >


            <!--------------------------------  RECOMENDACIONES  ------------------------------ >


            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">RECOMENDADOS PARA TI</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="row">

                                <?php
                                include("conexion.php");

                                //$A1_video_1_temp=mysqli_query($conn,"SELECT * FROM calificaciones ORDER BY calificacion DESC LIMIT 1");
                                //if($dataVideo1_temp=mysqli_fetch_assoc($A1_video_1_temp)){

                                //$idVideo_1_temp = $dataVideo1_temp['idVideo'];
                                $idVideo_1_temp = 8;
                                $idVideo_2_temp = 9;
                                $idVideo_3_temp = 10;
                                $idVideo_4_temp = 11;

                                $A1_video1 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_1_temp' ");
                                $A1_video2 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_2_temp' ");
                                $A1_video3 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_3_temp' ");
                                $A1_video4 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_4_temp' ");

                                if ($dataVideo1 = mysqli_fetch_assoc($A1_video1)) {
                                    $idVideo_1 = $dataVideo1['idVideo'];
                                    $name_1 = $dataVideo1['name'];
                                    $descripcion_1 = $dataVideo1['descripcion'];
                                    $categoria_1 = $dataVideo1['categoria'];
                                    $url_1 = $dataVideo1['urlVideo'];
                                }

                                if ($dataVideo2 = mysqli_fetch_assoc($A1_video2)) {
                                    $idVideo_2 = $dataVideo2['idVideo'];
                                    $name_2 = $dataVideo2['name'];
                                    $descripcion_2 = $dataVideo2['descripcion'];
                                    $categoria_2 = $dataVideo2['categoria'];
                                    $url_2 = $dataVideo2['urlVideo'];
                                }

                                if ($dataVideo3 = mysqli_fetch_assoc($A1_video3)) {
                                    $idVideo_3 = $dataVideo3['idVideo'];
                                    $name_3 = $dataVideo3['name'];
                                    $descripcion_3 = $dataVideo3['descripcion'];
                                    $categoria_3 = $dataVideo3['categoria'];
                                    $url_3 = $dataVideo3['urlVideo'];
                                }

                                if ($dataVideo4 = mysqli_fetch_assoc($A1_video4)) {
                                    $idVideo_4 = $dataVideo4['idVideo'];
                                    $name_4 = $dataVideo4['name'];
                                    $descripcion_4 = $dataVideo4['descripcion'];
                                    $categoria_4 = $dataVideo4['categoria'];
                                    $url_4 = $dataVideo4['urlVideo'];
                                }
                                //}
                                ?>

                                <!-- Video Recomendacion 1 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_VideoRec1">
                                    <video id="videoRec1" style="max-width: 100%; height: 200px;">
                                        <source id="videoRec1_url" src="videos/<?php echo $categoria_1; ?>/<?php echo $url_1; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_1; ?>" id="btn_play_video_rec1" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_1; ?>

                                </div>

                                <!-- Video Recomendacion 2 -->
                                <div class="col-md-3" style="font-size: 150%;">
                                    <video id="videoRec2" style="max-width: 100%; height: 200px;">
                                        <source src="videos/<?php echo $categoria_2; ?>/<?php echo $url_2; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_2; ?>" id="btn_play_video_rec2" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_2; ?>
                                </div>

                                <!-- Video Recomendacion 3 -->
                                <div class="col-md-3" style="font-size: 150%;">
                                    <video id="videoRec3" style="max-width: 100%; height: 200px;">
                                        <source src="videos/<?php echo $categoria_3; ?>/<?php echo $url_3; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_3; ?>" id="btn_play_video_rec3" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_3; ?>
                                </div>

                                <!-- Video Recomendacion 4 -->
                                <div class="col-md-3" style="font-size: 150%;">
                                    <video id="videoRec4" style="max-width: 100%; height: 200px;">
                                        <source src="videos/<?php echo $categoria_4; ?>/<?php echo $url_4; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_4; ?>" id="btn_play_video_rec4" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_4; ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- /.row -->


            <!----------------------------------  FIN RECOMENDADOS ---------------------------->


            <!--------------------------------------  Teorico  -------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">


                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo $nameCat; ?></h3>


                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="row">

                                <?php


                                //$A1_video_1_temp=mysqli_query($conn,"SELECT * FROM calificaciones ORDER BY calificacion DESC LIMIT 1");
                                //if($dataVideo1_temp=mysqli_fetch_assoc($A1_video_1_temp)){

                                //$idVideo_1_temp = $dataVideo1_temp['idVideo'];
                                $idVideo_1_teorico = 8;
                                $idVideo_2_teorico = 9;
                                $idVideo_3_teorico = 10;
                                $idVideo_4_teorico = 11;

                                $A1_video1_teorico  = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_1_teorico' ");
                                $A1_video2_teorico   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_2_teorico' ");
                                $A1_video3_teorico   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_3_teorico' ");
                                $A1_video4_teorico   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_4_teorico' ");

                                if ($dataVideo1_teorico   = mysqli_fetch_assoc($A1_video1_teorico)) {
                                    $idVideo_1_teorico     = $dataVideo1_teorico['idVideo'];
                                    $name_1_teorico        = $dataVideo1_teorico['name'];
                                    $descripcion_1_teorico = $dataVideo1_teorico['descripcion'];
                                    $categoria_1_teorico   = $dataVideo1_teorico['categoria'];
                                    $url_1_teorico         = $dataVideo1_teorico['urlVideo'];
                                }

                                if ($dataVideo2_teorico   = mysqli_fetch_assoc($A1_video2_teorico)) {
                                    $idVideo_2_teorico     = $dataVideo2_teorico['idVideo'];
                                    $name_2_teorico        = $dataVideo2_teorico['name'];
                                    $descripcion_2_teorico = $dataVideo2_teorico['descripcion'];
                                    $categoria_2_teorico   = $dataVideo2_teorico['categoria'];
                                    $url_2_teorico         = $dataVideo2_teorico['urlVideo'];
                                }

                                if ($dataVideo3_teorico   = mysqli_fetch_assoc($A1_video3_teorico)) {
                                    $idVideo_3_teorico     = $dataVideo3_teorico['idVideo'];
                                    $name_3_teorico        = $dataVideo3_teorico['name'];
                                    $descripcion_3_teorico = $dataVideo3_teorico['descripcion'];
                                    $categoria_3_teorico   = $dataVideo3_teorico['categoria'];
                                    $url_3_teorico         = $dataVideo3_teorico['urlVideo'];
                                }

                                if ($dataVideo4_teorico   = mysqli_fetch_assoc($A1_video4_teorico)) {
                                    $idVideo_4_teorico     = $dataVideo4_teorico['idVideo'];
                                    $name_4_teorico        = $dataVideo4_teorico['name'];
                                    $descripcion_4_teorico = $dataVideo4_teorico['descripcion'];
                                    $categoria_4_teorico   = $dataVideo4_teorico['categoria'];
                                    $url_4_teorico         = $dataVideo4_teorico['urlVideo'];
                                }
                                //}
                                ?>
                                <!-- Video teorico 1 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_teorico_1">
                                    <video id="video_1_teorico" style="max-width: 100%; height: 200px;">
                                        <source id="video_1_teorico_url" src="videos/<?php echo $categoria_1_teorico; ?>/<?php echo $url_1_teorico; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_1_teorico; ?>" id="btn_play_video_rec1" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_1_teorico; ?>

                                </div>

                                <!-- Video teorico 2 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_teorico_1">
                                    <video id="video_2_teorico" style="max-width: 100%; height: 200px;">
                                        <source id="video_2_teorico_url" src="videos/<?php echo $categoria_2_teorico; ?>/<?php echo $url_2_teorico; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_2_teorico; ?>" id="btn_play_video_rec1" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_2_teorico; ?>

                                </div>

                                <!-- Video teorico 3 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_teorico_1">
                                    <video id="video_3_teorico" style="max-width: 100%; height: 200px;">
                                        <source id="video_3_teorico_url" src="videos/<?php echo $categoria_3_teorico; ?>/<?php echo $url_3_teorico; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_3_teorico; ?>" id="btn_play_video_rec1" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_3_teorico; ?>

                                </div>

                                <!-- Video teorico 4 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_teorico_1">
                                    <video id="video_4_teorico" style="max-width: 100%; height: 200px;">
                                        <source id="video_4_teorico_url" src="videos/<?php echo $categoria_4_teorico; ?>/<?php echo $url_4_teorico; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_4_teorico; ?>" id="btn_play_video_rec1" type="button" class="btn bg-orange btn-flat margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_4_teorico; ?>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.row -->


            <!------------------------------------  FIN Teorico  ------------------------------>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Universidad del Cauca &copy; Semestre II - 2017 <a href="https://adminlte.io">Enfasis 4</a>.</strong>
        Telematica.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="dist/js/pages/dashboard2.js"></script>
-->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
