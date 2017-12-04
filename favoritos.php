<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['idUser']) {
    header("Location:index.html");
} elseif ($_SESSION['type'] == "admin") {
    header("Location:indexAdmin.php");
}

//--------------Busqueda Video principal
$idVideo_temp = 8;
$idVideoPrincipal = 0;
$namePrincipal = "";
$descripcionPrincipal = "";
$categoriaPrincipal = "";
$urlPrincipal = "";

$idUser = intval($_SESSION['idUser']);

include("conexion.php");

$A1_video1 = mysqli_query($conn, "SELECT * FROM calificaciones WHERE idUser = 10 AND calificacion = 5 ORDER BY idCalificacion DESC LIMIT 9;");

if ($dataVideo1 = mysqli_fetch_all($A1_video1)) {

    $idVideoPrincipal = intval($dataVideo1[0][2]);
    $categoriaPrincipal = $dataVideo1[0][3];

    $idVideo_1_favorito = intval($dataVideo1[1][2]);
    $idVideo_2_favorito = intval($dataVideo1[2][2]);
    $idVideo_3_favorito = intval($dataVideo1[3][2]);
    $idVideo_4_favorito = intval($dataVideo1[4][2]);

    $idVideo_5_favorito = intval($dataVideo1[5][2]);
    $idVideo_6_favorito = intval($dataVideo1[6][2]);
    $idVideo_7_favorito = intval($dataVideo1[7][2]);
    $idVideo_8_favorito = intval($dataVideo1[8][2]);

    $A1_video1_1 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo ='$idVideoPrincipal';");
    if ($dataVideo1_1 = mysqli_fetch_assoc($A1_video1_1)) {
        $namePrincipal = $dataVideo1_1['name'];
        $descripcionPrincipal = $dataVideo1_1['descripcion'];
        $urlPrincipal = $dataVideo1_1['urlVideo'];
    }
}


//----------------------------------------------------------




$A1_video1_favorito  = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_1_favorito' ");
$A1_video2_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_2_favorito' ");
$A1_video3_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_3_favorito' ");
$A1_video4_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_4_favorito' ");

$A1_video5_favorito  = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_5_favorito' ");
$A1_video6_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_6_favorito' ");
$A1_video7_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_7_favorito' ");
$A1_video8_favorito   = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_8_favorito' ");

if ($dataVideo1_favorito   = mysqli_fetch_assoc($A1_video1_favorito)) {
    $idVideo_1_favorito     = $dataVideo1_favorito['idVideo'];
    $name_1_favorito        = $dataVideo1_favorito['name'];
    $descripcion_1_favorito = $dataVideo1_favorito['descripcion'];
    $categoria_1_favorito   = $dataVideo1_favorito['categoria'];
    $url_1_favorito         = $dataVideo1_favorito['urlVideo'];
}

if ($dataVideo2_favorito   = mysqli_fetch_assoc($A1_video2_favorito)) {
    $idVideo_2_favorito     = $dataVideo2_favorito['idVideo'];
    $name_2_favorito        = $dataVideo2_favorito['name'];
    $descripcion_2_favorito = $dataVideo2_favorito['descripcion'];
    $categoria_2_favorito   = $dataVideo2_favorito['categoria'];
    $url_2_favorito         = $dataVideo2_favorito['urlVideo'];
}

if ($dataVideo3_favorito   = mysqli_fetch_assoc($A1_video3_favorito)) {
    $idVideo_3_favorito     = $dataVideo3_favorito['idVideo'];
    $name_3_favorito        = $dataVideo3_favorito['name'];
    $descripcion_3_favorito = $dataVideo3_favorito['descripcion'];
    $categoria_3_favorito   = $dataVideo3_favorito['categoria'];
    $url_3_favorito         = $dataVideo3_favorito['urlVideo'];
}

if ($dataVideo4_favorito   = mysqli_fetch_assoc($A1_video4_favorito)) {
    $idVideo_4_favorito     = $dataVideo4_favorito['idVideo'];
    $name_4_favorito        = $dataVideo4_favorito['name'];
    $descripcion_4_favorito = $dataVideo4_favorito['descripcion'];
    $categoria_4_favorito   = $dataVideo4_favorito['categoria'];
    $url_4_favorito         = $dataVideo4_favorito['urlVideo'];
}

if ($dataVideo5_favorito   = mysqli_fetch_assoc($A1_video5_favorito)) {
    $idVideo_5_favorito     = $dataVideo5_favorito['idVideo'];
    $name_5_favorito        = $dataVideo5_favorito['name'];
    $descripcion_5_favorito = $dataVideo5_favorito['descripcion'];
    $categoria_5_favorito   = $dataVideo5_favorito['categoria'];
    $url_5_favorito         = $dataVideo5_favorito['urlVideo'];
}

if ($dataVideo6_favorito   = mysqli_fetch_assoc($A1_video6_favorito)) {
    $idVideo_6_favorito     = $dataVideo6_favorito['idVideo'];
    $name_6_favorito        = $dataVideo6_favorito['name'];
    $descripcion_6_favorito = $dataVideo6_favorito['descripcion'];
    $categoria_6_favorito   = $dataVideo6_favorito['categoria'];
    $url_6_favorito         = $dataVideo6_favorito['urlVideo'];
}

if ($dataVideo7_favorito   = mysqli_fetch_assoc($A1_video7_favorito)) {
    $idVideo_7_favorito     = $dataVideo7_favorito['idVideo'];
    $name_7_favorito        = $dataVideo7_favorito['name'];
    $descripcion_7_favorito = $dataVideo7_favorito['descripcion'];
    $categoria_7_favorito   = $dataVideo7_favorito['categoria'];
    $url_7_favorito         = $dataVideo7_favorito['urlVideo'];
}
if ($dataVideo8_favorito   = mysqli_fetch_assoc($A1_video8_favorito)) {
    $idVideo_8_favorito     = $dataVideo8_favorito['idVideo'];
    $name_8_favorito        = $dataVideo8_favorito['name'];
    $descripcion_8_favorito = $dataVideo8_favorito['descripcion'];
    $categoria_8_favorito   = $dataVideo8_favorito['categoria'];
    $url_8_favorito         = $dataVideo8_favorito['urlVideo'];
}


//}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nameApp | Favoritos</title>

    <!-- video.js-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script type="text/javascript" src="video.js"></script>
    <!-- Estrellas -->
    <!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    -->
    <link rel="stylesheet" href="dist/css/calificacion/star-rating.min.css" />
    <script src="dist/js/calificacion/star-rating.min.js"></script>

    <!----------------- to JavaScript
    http://bicimap.es/wordpress/?p=1535
    ---------------------->

    <?php $idVideoPHP = $idVideoPrincipal; ?>
    <script type="text/javascript">
        var idVideoJS ="<?php echo $idVideoPHP; ?>";
        var idUserJS ="<?php echo $_SESSION['idUser']; ?>";
        var catVideoJS ="<?php echo $categoriaPrincipal; ?>";
    </script>


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
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

<!-- Site wrapper -->
<div class="wrapper">


    <!------------------------------------- BARRA -------------------------------------->


    <header class="main-header">

        <!-- Logo -->
        <a  class="logo" >
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini" href="#" id="btn_Home_1"><b>n</b>App</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg" href="#" id="btn_Home_2"><b></b>nameApp</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
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

                </ul>
            </div>

        </nav>
    </header>


    <!------------------------------------- FIN BARRA -------------------------------------->

    <!-- =============================================== -->

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
                    <a href="#" id="btn_Home_3">
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

    <!------------------------------- FIN MENU DE NAVEGACION ---------------------------->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="inicioUsuario.php" id="btn_Home_4"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Favoritos</li>
            </ol>
        </section>


        <!----------------------------------  COLUMNA  ------------------------------------>

        <!-- Main content -->
        <section class="content">

            <!------------- Encabezado imagen seccion Video
            <div class="box box-widget widget-user">

                <div class="widget-user-header bg-black"
                     style="background: url('dist/img/user8-128x128.jpg') center center;">


                    <h3 class="widget-user-username">VIDEO</h3>
                    <h5 class="widget-user-desc">Enfasis 4 - Telematica</h5>

                </div>

            </div>
            ----------------------->


            <div class="row">
                <div class="col-md-12">
                    <!------------Favorito Principal ---------------------------->

                    <div class="col-md-12">


                        <video id="id_videoPrincipal" width="100%" style="height: auto;" >
                            <source src="videos/<?php echo $categoriaPrincipal; ?>/<?php echo $urlPrincipal; ?>.mp4"
                                    type="video/mp4">
                        </video>



                        <script>
                            var videoP = document.getElementById("id_videoPrincipal");
                            videoP.onended = function() {
                                javascript:hola();
                            };
                        </script>


                        <div class="box box-solid">

                            <div class="box-header with-border">
                                <div class="row">

                                    <div class="col-md-1">
                                        <a href="video.php?idVideo=<?php echo $idVideoPrincipal; ?>" id="btn_play_video_Pric" type="button" class="btn bg-primary margin"
                                           style="text-align: left; ">Play
                                            <i class="fa fa-play"></i>
                                        </a>

                                    </div>
                                    <div class="col-md-11">
                                        <h2 style="text-align: left; vertical-align: baseline;"><?php echo $namePrincipal; ?></h2>

                                    </div>







                                    <div class="row">






                                        <!--
                                        http://itsolutionstuff.com/post/bootstrap-star-rating-example-using-bootstrap-star-rating-pluginexample.html
                                         http://plugins.krajee.com/star-rating-demo-basic-usage
                                        -->
                                    </div>


                                </div>
                                <!--
                                <i class="fa fa-text-width"></i>
                                <h3 class="box-title">Descripción</h3>
                                -->
                            </div>
                            <!-- /.box-header -->

                            <!----

                            <div class="box-body">
                                <dl>
                                    <dd><?php //echo $descripcionPrincipal; ?></dd>
                                </dl>
                            </div>
                            -->
                            <!-- /.box-body -->

                        </div>
                    </div>
                    <!------------Fin Favorito Principal ---------------------------->

                </div>
            </div>

            <!--------------------------------------  Sub-Favoritos -------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <!--
                        <div class="box-header with-border">
                            <h3 class="box-title">Teorico</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        -->


                        <div class="box-body">
                            <!----------------------------------- 1 Fila ----------------------------------------------->
                            <div class="row">


                                <!-- Video favorito 1 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_1_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_1_favorito_url" src="videos/<?php echo $categoria_1_favorito; ?>/<?php echo $url_1_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_1_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_1_favorito; ?>

                                </div>

                                <!-- Video favorito 2 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_2_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_2_favorito_url" src="videos/<?php echo $categoria_2_favorito; ?>/<?php echo $url_2_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_2_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_2_favorito; ?>

                                </div>

                                <!-- Video favorito 3 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_3_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_3_favorito_url" src="videos/<?php echo $categoria_3_favorito; ?>/<?php echo $url_3_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_3_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_3_favorito; ?>

                                </div>

                                <!-- Video favorito 4 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_4_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_4_favorito_url" src="videos/<?php echo $categoria_4_favorito; ?>/<?php echo $url_4_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_4_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_4_favorito; ?>

                                </div>
                            </div>
                            <!----------------------------------- 1 Fila ----------------------------------------------->
                            <!----------------------------------- 2 Fila ----------------------------------------------->
                            <div class="row">


                                <!-- Video favorito 5 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_5">
                                    <video id="video_5_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_5_favorito_url" src="videos/<?php echo $categoria_5_favorito; ?>/<?php echo $url_5_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_5_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_5_favorito; ?>

                                </div>

                                <!-- Video favorito 6 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_6">
                                    <video id="video_6_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_6_favorito_url" src="videos/<?php echo $categoria_6_favorito; ?>/<?php echo $url_6_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_6_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_6_favorito; ?>

                                </div>

                                <!-- Video favorito 7 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_7_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_7_favorito_url" src="videos/<?php echo $categoria_7_favorito; ?>/<?php echo $url_7_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_7_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_7_favorito; ?>

                                </div>

                                <!-- Video favorito 8 -->
                                <div class="col-md-3" style="font-size: 150%;" id="div_favorito_1">
                                    <video id="video_8_favorito" style="max-width: 100%; height: 200px;">
                                        <source id="video_8_favorito_url" src="videos/<?php echo $categoria_8_favorito; ?>/<?php echo $url_8_favorito; ?>.mp4"
                                                type="video/mp4">
                                    </video>

                                    <a href="video.php?idVideo=<?php echo $idVideo_8_favorito; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                       style="text-align: left;">Play
                                        <i class="fa fa-play"></i>
                                    </a><?php echo $name_8_favorito; ?>

                                </div>
                            </div>
                            <!----------------------------------- 2 Fila ----------------------------------------------->

                        </div>


                    </div>
                </div>
            </div>
            <!-- /.row -->


            <!------------------------------------  FIN Sub - favoritos ------------------------------>



            <!-- Default box -->


            <!-- /.box-body -->
            <div class="box-footer">
                Tus videos favoritos!
            </div>
            <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->


    <!----------------------------------  FIN COLUMNA  ---------------------------------->


</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Universidad del Cauca &copy; Semestre II - 2017 <a href="https://adminlte.io">Enfasis 4</a>.</strong>
    Telematica.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
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
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
