<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['idUser']) {
    header("Location:index.html");
} elseif ($_SESSION['type'] == "admin") {
    header("Location:indexAdmin.php");
}
$idUser =$_SESSION['idUser'];
//--------------Busqueda Video principal
$idVideo_temp = $_GET['idVideo'];
$idVideoPrincipal = 0;
$namePrincipal = "";
$descripcionPrincipal = "";
$categoriaPrincipal = "";
$urlPrincipal = "";

include("conexion.php");

$A1_video1 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_temp'");
if ($dataVideo1 = mysqli_fetch_assoc($A1_video1)) {

    $idVideoPrincipal = $dataVideo1['idVideo'];
    $namePrincipal = $dataVideo1['name'];
    $descripcionPrincipal = $dataVideo1['descripcion'];
    $categoriaPrincipal = $dataVideo1['categoria'];
    $urlPrincipal = $dataVideo1['urlVideo'];
}

?>
<html>
    <head>
        <title>nameApp | <?php echo $namePrincipal; ?></title>

        <?php $idVideoPHP = $idVideoPrincipal; ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

       
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <!-- <script type="text/javascript" src="video.js"></script>       -->
        <script src="dist/js/calificacion/star-rating.min.js"></script>

        <script type="text/javascript">
            var idVideoJS ="<?php echo $idVideoPHP; ?>";
            var idUserJS ="<?php echo $_SESSION['idUser']; ?>";
            var catVideoJS ="<?php echo $categoriaPrincipal; ?>";
        </script>

        <!--Reconocimiento -->
        <script type="text/javascript" src="./lib_Aff/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="./lib_Aff/bootstrap.min.js"></script>	
		<script type="text/javascript" src="js/3.2/affdex.js"></script>

        <link href="css/estilos.css" type="text/css" rel="stylesheet"></link>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <!-- _____________________________________________ -->

       <link rel="stylesheet" href="dist/css/calificacion/star-rating.min.css" />
       <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
       <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
       <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">     
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
                            <a href="inicioUsuario.php" id="btn_Home_3">
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
                        <li><a href="#" id="btn_Home_4"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Buscar Video</a></li>
                        <li class="active">Video</li>
                    </ol>
                </section>



                <!-- Main content -->
                <section class="content">



                    <div class="row">
                        <div class="col-md-12">
                            <!------------Video Principal ---------------------------->

                         <div class="col-md-9">

                            <div>
                                <div class="camara" id="affdex_elements">
                                    <script type="text/javascript" src="./lib_Aff/adapter-1.4.0.js"></script>
                                </div>
                                <div>                                       
                                    <video class="video" id="video" 
                                    src="videos/<?php echo $categoriaPrincipal; ?>/<?php echo $urlPrincipal; ?>.mp4"
                                    width="100%" style="height: auto;" controls >
                                </div>			
                                <!-- Boton pausar -->
                                <!-- <div id="buttonbar">
                                    <button id="play" onclick="vidplay()">&gt;</button>	
                                </div>		                               -->
                            </div>

                                <div class="box box-solid">

                                    <div class="box-header with-border">
                                        <div class="row">



                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h1 style="vertical-align: text-top;"><?php echo $namePrincipal; ?></h1>
                                                </div>
                                                <div class="col-md-4">
                                                    <input id="calif_videoPrincipal" class="rating rating-loading" data-size="xs"
                                                        data-min="0" data-max="5" data-step="1" value="0">
                                                </div>
                                                <div class="col-md-2">
                                                    <button id="btn_regCalificacion" type="button"
                                                            class="btn bg-primary  margin"
                                                            style="text-align: left;">Enviar
                                                        <i class="fa fa-play"></i>
                                                    </button>
                                                </div>

                                                <!--
                                                http://itsolutionstuff.com/post/bootstrap-star-rating-example-using-bootstrap-star-rating-pluginexample.html
                                                http://plugins.krajee.com/star-rating-demo-basic-usage
                                                -->
                                            </div>


                                        </div>
                                        <i class="fa fa-text-width"></i>
                                        <h3 class="box-title">Descripción</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <dl>
                                            <dd><?php echo $descripcionPrincipal; ?></dd>
                                        </dl>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <!------------Fin Video Principal ---------------------------->
                            <!------------Videos recomendados---------------------------->

                            <?php

                            //____________________________________________________________________________

                            include ("conexion.php");                            
                            include ("./DataBase/conexion.php");

                            //se  define la variable para conectar a la  BD
                            $mysqli = new mysqli($host, $user, $pw, $db);

                            //se  realiza la consulta de emociones de un usuairo para el video actual
                            $sql = "SELECT * FROM emociones WHERE idUser='$idUser' AND idVideo='$idVideo_temp'";
                            $result = $mysqli->query($sql);

                            //se  realiza la consulta de emociones de un usuairo para la categorial Teorico
                            $sql1 = "SELECT * FROM emociones WHERE idUser='$idUser' AND categoria='teorico' order by idEmocion DESC";
                            $result1 = $mysqli->query($sql1);

                            //se  realiza la consulta de emociones de un usuairo para la categorial Practico
                            $sql2 = "SELECT * FROM emociones WHERE idUser='$$idUser' AND categoria='practico' order by idEmocion DESC";
                            $result2 = $mysqli->query($sql2);

                            //se  realiza la consulta de emociones de un usuairo para la categorial Ejercicios
                            $sql3 = "SELECT * FROM emociones WHERE idUser='$idUser' AND categoria='ejercicios' order by idEmocion DESC";
                            $result3 = $mysqli->query($sql3);

                            //se  realiza la consulta de emociones de un usuairo para la categorial Documentales
                            $sql4 = "SELECT * FROM emociones WHERE idUser='$idUser' AND categoria='documentales' order by idEmocion DESC";
                            $result4 = $mysqli->query($sql4);

                            //se  realiza la consulta de emociones de un usuairo para la categorial Biografias
                            $sql5 = "SELECT * FROM emociones WHERE idUser='$idUser' AND categoria='biografias' order by idEmocion DESC";
                            $result5 = $mysqli->query($sql5);

                            //Video actual
                            $numero_filas = $result->num_rows;
                            $pesoTotal=0;

                            while($row = $result->fetch_array(MYSQLI_NUM))
                            {
                                $emocionV = $row[4];								
                            }

                            echo '
                            <h1><center>Sistema de Recomendaciones</center></h1>
                            <h4><center>Calificación del Video Actual: '.$emocionV.'</center></h4>';

                            $numero_filas1 = $result1->num_rows;
                            $numero_filas2 = $result2->num_rows;
                            $numero_filas3 = $result3->num_rows;
                            $numero_filas4 = $result4->num_rows;
                            $numero_filas5 = $result5->num_rows;

                            //Categoría Teórico
                            if($numero_filas1==0){
                                $promedio1=1;
                                echo '
                                <h4><center>Calificación categoría Teórico no se ha evaluado</center></h4>';
                            } else{
                                $pesoTotal=0;
                                while($row = $result1->fetch_array(MYSQLI_NUM))
                                { 
                                    $emocion = $row[4];			
                                    if ($emocion =="aburrido")
                                        $pesoT=0;
                                    if ($emocion =="neutral")
                                         $pesoT=1;
                                    if ($emocion =="entretenido")
                                        $pesoT=3;				
                                    $pesoTotal = $pesoT + $pesoTotal;			
                                    }
                                    $promedio1 = $pesoTotal/$numero_filas1;
                                    echo '
                                    <h4><center>Calificación categoría Teórico: '.$promedio1.'</center></h4>';
                                }

                            //Categoría práctico
                            if($numero_filas2==0){
                                $promedio2=1;
                                echo '
                                <h4><center>Calificación categoría Práctico no se ha evaluado</center></h4>';
                                } 
                            else{
                                $pesoTotal=0;
                                while($row = $result2->fetch_array(MYSQLI_NUM))
                                    {
                                    $emocion = $row[4];			
                                    if ($emocion =="aburrido")
                                        $pesoT=0;
                                    if ($emocion =="neutral")
                                        $pesoT=1;
                                    if ($emocion =="entretenido")
                                        $pesoT=3;				
                                    $pesoTotal = $pesoT + $pesoTotal;			
                                }
                                $promedio2 = $pesoTotal/$numero_filas2;
                                echo '
                                <h4><center>Calificación categoría Práctico: '.$promedio2.'</center></h4>';
                            }

                            //Categoría Ejercicos
                            if($numero_filas3==0){
                                $promedio3=1;
                                echo '
                                <h4><center>Calificación categoría Ejercicos no se ha evaluado</center></h4>';
                            } 
                            else{
                                $pesoTotal=0;
                                while($row = $result3->fetch_array(MYSQLI_NUM))
                                {
                                    $emocion = $row[4];			
                                    if ($emocion =="aburrido")
                                        $pesoT=0;
                                    if ($emocion =="neutral")
                                        $pesoT=1;
                                    if ($emocion =="entretenido")
                                        $pesoT=3;				
                                    $pesoTotal = $pesoT + $pesoTotal;			
                                }
                                $promedio3 = $pesoTotal/$numero_filas3;
                                echo '
                                <h4><center>Calificación categoría Ejercicios: '.$promedio3.'</center></h4>';
                            }

                            //Categoría Documentales
                            if($numero_filas4==0){
                                $promedio4=1;
                                echo '
                                <h4><center>Calificación categoría Documentales no se ha evaluado</center></h4>';
                            } 
                            else{
                            $pesoTotal=0;
                            while($row = $result4->fetch_array(MYSQLI_NUM))
                            {
                                $emocion = $row[4];			
                                if ($emocion =="aburrido")
                                    $pesoT=0;
                                if ($emocion =="neutral")
                                    $pesoT=1;
                                if ($emocion =="entretenido")
                                    $pesoT=3;				
                                $pesoTotal = $pesoT + $pesoTotal;			
                            }
                            $promedio4 = $pesoTotal/$numero_filas4;
                            echo '
                            <h4><center>Calificación categoría Documentales: '.$promedio4.'</center></h4>';
                            }

                            //Categoría Biografías
                            if($numero_filas5==0){
                                $promedio5=1;
                                echo '
                                <h4><center>Calificación categoria Biografías no se ha Evaluado</center></h4>';
                            } 
                            else{
                                $pesoTotal=0;
                                while($row = $result5->fetch_array(MYSQLI_NUM))
                                    {
                                    $emocion = $row[4];			
                                    if ($emocion =="aburrido")
                                        $pesoT=0;
                                    if ($emocion =="neutral")
                                        $pesoT=1;
                                    if ($emocion =="entretenido")
                                        $pesoT=3;				
                                    $pesoTotal = $pesoT + $pesoTotal;			
                                }
                                $promedio5 = $pesoTotal/$numero_filas5;
                                echo '
                                <h4><center>Calificación Categoría Biografías: '.$promedio5.'</center></h4>';
                            }

                            //Seleccción de la categoria mejor calificada para el usuario
                            $mayor=$promedio1;
                            $recomendacion = "TEORICO";
                            if($mayor<$promedio2){
                                $mayor=$promedio2;
                                $recomendacion = "PRACTICO";
                            }
                            if($mayor<$promedio3){
                                $mayor=$promedio3;
                                $recomendacion = "EJERCICIOS";
                            }
                            if($mayor<$promedio4){
                                $mayor=$promedio4;
                                $recomendacion = "DOCUMENTALES";
                            }
                            if($mayor<$promedio5){
                                $mayor=$promedio5;
                                $recomendacion = "BIOGRAFIAS";
                            }

                            //______________________________________________________
                            if($emocionV=="aburrido"){
                                if($recomendacion == "teorico"){
                                    $idVideo_temp1 = 3;
                                    $idVideo_temp2 = 8;
                                    $idVideo_temp3 = 13;
                                    $idVideo_temp4 = 15;
                                }
                                if($recomendacion == "practico"){
                                    $idVideo_temp1 = 21;
                                    $idVideo_temp2 = 28;
                                    $idVideo_temp3 = 31;
                                    $idVideo_temp4 = 35;
                                    }
                                if($recomendacion == "documentales"){
                                    $idVideo_temp1 = 41;
                                    $idVideo_temp2 = 56;
                                    $idVideo_temp3 = 54;
                                    $idVideo_temp4 = 55;
                                    }
                                if($recomendacion == "biografias"){
                                    $idVideo_temp1 = 78;
                                    $idVideo_temp2 = 66;
                                    $idVideo_temp3 = 71;
                                    $idVideo_temp4 = 65;
                                    }
                                if($recomendacion == "ejercicios"){
                                    $idVideo_temp1 = 88;
                                    $idVideo_temp2 = 89;
                                    $idVideo_temp3 = 97;
                                    $idVideo_temp4 = 95;
                                    }

                            }
                            else{
                                if($categoriaPrincipal == "teorcio"){
                                    $idVideo_temp1 = 1;
                                    $idVideo_temp2 = 9;
                                    $idVideo_temp3 = 17;
                                    $idVideo_temp4 = 19;
                                }

                                if($categoriaPrincipal == "practico"){
                                    $idVideo_temp1 = 28;
                                    $idVideo_temp2 = 26;
                                    $idVideo_temp3 = 38;
                                    $idVideo_temp4 = 31;
                                    }
                                if($categoriaPrincipal == "documentales"){
                                    $idVideo_temp1 = 51;
                                    $idVideo_temp2 = 57;
                                    $idVideo_temp3 = 59;
                                    $idVideo_temp4 = 54;
                                    }
                                if($categoriaPrincipal == "biografias"){
                                    $idVideo_temp1 = 77;
                                    $idVideo_temp2 = 64;
                                    $idVideo_temp3 = 73;
                                    $idVideo_temp4 = 69;
                                    }
                                if($categoriaPrincipal == "ejercicios"){
                                    $idVideo_temp1 = 81;
                                    $idVideo_temp2 = 83;
                                    $idVideo_temp3 = 91;
                                    $idVideo_temp4 = 96;
                                    }
                        }

                        if($emocionV=="aburrido"){
                            echo '
                            <h4><center>No se recomienda esta categoria</center></h4>
                            <h4><center>Se recomiendo la Categoria: '.$recomendacion.'</center></h4>';
                        }
                        else{ // la categoria actual esta bien
                            echo '
                            <h4><center>SE RECOMIENDA LA CATEGORIA ACTUAL</center></h4>';				
                        }


                            $A1_video1 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_temp1'");
                            $A2_video2 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_temp2'");
                            $A3_video3 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_temp3'");
                            $A4_video4 = mysqli_query($conn, "SELECT * FROM videos WHERE idVideo='$idVideo_temp4'");

                            if ($dataVideo1 = mysqli_fetch_assoc($A1_video1)) {

                                $idVideo_Rec1 = $dataVideo1['idVideo'];
                                $name_Rec1 = $dataVideo1['name'];
                                $descripcion_Rec1 = $dataVideo1['descripcion'];
                                $categoria_Rec1 = $dataVideo1['categoria'];
                                $url_Rec1 = $dataVideo1['urlVideo'];
                            }

                            if ($dataVideo2 = mysqli_fetch_assoc($A2_video2)) {

                                $idVideo_Rec2 = $dataVideo2['idVideo'];
                                $name_Rec2 = $dataVideo2['name'];
                                $descripcion_Rec2 = $dataVideo2['descripcion'];
                                $categoria_Rec2 = $dataVideo2['categoria'];
                                $url_Rec2 = $dataVideo2['urlVideo'];
                            }

                            if ($dataVideo3 = mysqli_fetch_assoc($A3_video3)) {

                                $idVideo_Rec3 = $dataVideo3['idVideo'];
                                $name_Rec3 = $dataVideo3['name'];
                                $descripcion_Rec3 = $dataVideo3['descripcion'];
                                $categoria_Rec3 = $dataVideo3['categoria'];
                                $url_Rec3 = $dataVideo3['urlVideo'];
                            }

                            if ($dataVideo4 = mysqli_fetch_assoc($A4_video4)) {

                                $idVideo_Rec4 = $dataVideo4['idVideo'];
                                $name_Rec4 = $dataVideo4['name'];
                                $descripcion_Rec4 = $dataVideo4['descripcion'];
                                $categoria_Rec4 = $dataVideo4['categoria'];
                                $url_Rec4 = $dataVideo4['urlVideo'];
                            }

                            ?>

                            <div class="col-md-3">
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <i class="fa fa-bullhorn"></i>

                                        <h3 class="box-title">Recomendaciones</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">

                                        <!------------Videos 1 recomendado ---------------------------->
                                        <div>
                                            <video id="videoRec1" width="200" style="height: auto;">
                                                <source id="videoRec1_url"
                                                        src="videos/<?php echo $categoria_Rec1; ?>/<?php echo $url_Rec1; ?>.mp4"
                                                        type="video/mp4">
                                            </video>
                                           
                                            <a href="video.php?idVideo=<?php echo $idVideo_Rec1; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                                style="text-align: left;">Play
                                                <i class="fa fa-play"></i>
                                            </a>
                                            
                                            <?php echo $name_Rec1; ?>
                                        </div>
                                        <!------------Fin Videos 1 recomendado ---------------------------->
                                        <!------------Videos 2 recomendado ---------------------------->
                                        <div>
                                            <video id="videoRec2" width="200" style="height: auto;">
                                                <source id="videoRec2_url"
                                                        src="videos/<?php echo $categoria_Rec2; ?>/<?php echo $url_Rec2; ?>.mp4"
                                                        type="video/mp4">
                                            </video>
                                            <a href="video.php?idVideo=<?php echo $idVideo_Rec2; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                                style="text-align: left;">Play
                                                <i class="fa fa-play"></i>
                                            </a>
                                            <?php echo $name_Rec2; ?>
                                        </div>
                                        <!------------Fin Videos 2 recomendado ---------------------------->
                                        <!------------Videos 3 recomendado ---------------------------->
                                        <div>
                                            <video id="videoRec3" width="200" style="height: auto;">
                                                <source id="videoRec3_url"
                                                        src="videos/<?php echo $categoria_Rec3; ?>/<?php echo $url_Rec3; ?>.mp4"
                                                        type="video/mp4">
                                            </video>

                                            <a href="video.php?idVideo=<?php echo $idVideo_Rec3; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                                style="text-align: left;">Play
                                                <i class="fa fa-play"></i>
                                            </a>
                                            <?php echo $name_Rec3; ?>
                                        </div>
                                        <!------------Fin Videos 3 recomendado ---------------------------->
                                        <!------------Videos 4 recomendado ---------------------------->
                                        <div>
                                            <video id="videoRec4" width="200" style="height: auto;">
                                                <source id="videoRec4_url"
                                                        src="videos/<?php echo $categoria_Rec4; ?>/<?php echo $url_Rec4; ?>.mp4"
                                                        type="video/mp4">
                                            </video>
                                            
                                            <a href="video.php?idVideo=<?php echo $idVideo_Rec4; ?>" id="btn_play_video_rec1" type="button" class="btn bg-primary  margin"
                                                style="text-align: left;">Play
                                                <i class="fa fa-play"></i>
                                            </a>
                                        <?php echo $name_Rec4; ?>
                                        </div>
                                        <!------------Fin Videos 4 recomendado ---------------------------->


                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!------------Fin Videos recomendados---------------------------->

                        </div>
                    </div>

                    <!-- Default box -->


                    <!-- /.box-body -->
                    <div class="box-footer">
                        Estos son los videos que tenemos disponibles para ti
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


<script type="text/javascript" >
        var divRoot = $("#affdex_elements")[0];
        var width = 280;
        var height = 220;
        var faceMode = affdex.FaceDetectorMode.LARGE_FACES;
        var aburrido = 0;
        var entretenido = 0;
        var neutral = 0;
        // Construct a CameraDetector and specify the image width / height and face detector mode.
        var detector = new affdex.CameraDetector(divRoot, width, height, faceMode);
        var reconocimiento = 1;
        var variable = 0;

        // Enable detection of all Expressions, Emotions and Emojis classifiers.
        detector.detectAllEmotions();
        detector.detectAllExpressions();
        detector.detectAllEmojis();
        detector.detectAllAppearance();
        detector.start();

        // Add a callback to notify when the detector is initialized and ready for runing.
        detector.addEventListener("onInitializeSuccess", function () {
        // Display canvas instead of video feed because we want to draw the feature points on it
        $("#face_video_canvas").css("display", "none");
        $("#face_video").css("display", "none");
        });

        function log(node_name, msg) {
        $(node_name).append("<span>" + msg + "</span><br />")
        }

        // Function executes when Start button is pushed.
        function onStart() {
        if (detector && !detector.isRunning) {
            $("#logs").html("");
            detector.start();
        }
        }

        // Function executes when Stop button is pushed
        function onStop() {
        if (detector && detector.isRunning) {
            detector.removeEventListener();
            console.log("PAUSA RECONOCIMIENTO");
            detector.stop();

        }
        };

        // Function executes when Reset button is pushed
        function onReset() {
        if (detector && detector.isRunning) {
            detector.reset();

            $('#results').html("");
        }
        };

        // Checks for Webcam access
        detector.addEventListener("onWebcamConnectSuccess", function () {
        });

        // Inform in console if fails
        detector.addEventListener("onWebcamConnectFailure", function () {
        console.log("Webcam access denied");
        });

        // se notifica que se paro con el reconocimiento
        detector.addEventListener("onStopSuccess", function () {

        $("#results").html("");
        });


        // se sacan los resultados de la deteccion de la camara
        detector.addEventListener("onImageResultsSuccess", function (faces, image, timestamp) {
        if (reconocimiento == 1){
            $('#results').html("");
            if (faces.length > 0) {
            var appearance = JSON.stringify(faces[0].appearance)
            var emotions = JSON.stringify(faces[0].emotions, function (key, val) {
                return val.toFixed ? Number(val.toFixed(0)) : val;
            })
            var expressions = JSON.stringify(faces[0].expressions, function (key, val) {
                return val.toFixed ? Number(val.toFixed(0)) : val;
            })
            var types = JSON.parse(emotions);
            log('#results', "Emotions: " + emotions);
            getMood(types)
            drawFeaturePoints(image, faces[0].featurePoints);
            }
        }
        });

        //Dibuja los puntos de características faciales detectados en la imagen
        function drawFeaturePoints(img, featurePoints) {
        var contxt = $('#face_video_canvas')[0].getContext('2d');
        var hRatio = contxt.canvas.width / img.width;
        var vRatio = contxt.canvas.height / img.height;
        var ratio = Math.min(hRatio, vRatio);

        contxt.strokeStyle = "#FFFFFF";
        for (var id in featurePoints) {
            contxt.beginPath();
            contxt.arc(featurePoints[id].x,
            featurePoints[id].y, 2, 0, 2 * Math.PI);
            contxt.stroke();
        }
        }

        function getMood(types) {
        var joy = types.joy;
        var sadness = types.sadness;
        var disgust = types.disgust;
        var contempt = types.contempt;
        var anger = types.anger;
        var fear = types.fear;
        var surprise = types.surprise;
        var emotion;

        //Se inicializan las variables que se tendrán en cuenta para definir las emociones
        var suma = (joy + sadness + disgust + contempt + anger + fear + surprise)
        var felicidad = joy - sadness - disgust - anger
        var promedio1 = (suma - surprise) / 6
        var promedio2 = (suma - fear) / 6
        var promedio3 = (suma - disgust) / 6
        var promedio4 = (suma - sadness) / 6
        var promedio5 = (suma - anger) / 6
        var promedio6 = (suma - contempt) / 6

        if (suma < 8) {
            emotion = "neutral";
            neutral = neutral + 1;
        }

        else if ((felicidad > 0) || (surprise > promedio1) || (fear > promedio2)) {
            emotion = "entretenido";
            entretenido = entretenido + 5;
        }

        else if ((disgust > promedio3) || (sadness > promedio4) || (anger > promedio5) || (contempt > promedio6)) {
            emotion = "aburrido"
            aburrido = aburrido + 5;
        }

        log('#results', "Humor: " + emotion);
        //Se envia la emocion por ajax a un archivo en php el cual realiza un INSERT en la base de datos
        Consulta();
        }


        function vidplay() {
        var video = document.getElementById("video");
        var button = document.getElementById("play");
        var tiempoTotal = video.duration;
        console.log(tiempoTotal);

        if (video.paused) {
            video.play();
            console.log("SE REINICIÓ EL VIDEO");
            reconocimiento = 1;

        }
        else {
            video.pause();
            console.log("SE PAUSÓ EL VIDEO");
            var tiempo = video.currentTime;
            reconocimiento = 0;
            //console.log(tiempo);
        }

        }

        //Envio datos
        function Consulta() {
        var video = document.getElementById("video");
        var tiempoTotal = video.duration;
        var tiempoActual = video.currentTime;
        //var tmp = parseInt(tiempoTotal - 179);
        var tmp = 20;
        var Actual = parseInt (tiempoActual);
        if(Actual == tmp){
            variable = 1;
        }

        var emocionMax = 0;
        var idEmocion = 0;
        var idUser = <?php echo''.$idUser.''; ?>;
        var idVideo = <?php echo''.$idVideo_temp.''; ?>;
        var categoria = "<?php echo''.$categoriaPrincipal .''; ?>";
        document.getElementsByName("categoria").value = categoria;
        var emocion = 0;


        if (aburrido > emocionMax) {
            emocionMax = aburrido;
            emocion = "aburrido";
        }

        if (entretenido > emocionMax) {
            emocionMax = entretenido;
            emocion = "entretenido";
        }
        
        if (neutral > emocionMax) {
            emocionMax = neutral;
            emocion = "neutral";
        }

        log('#results', "emocion: " + emocion);
        log('#results', "aburrido: " + aburrido);
        log('#results', "entretenido: " + entretenido);
        log('#results', "neutral: " + neutral);



        if (Actual > tmp && variable == 1) {
            console.log("TIEMPO = PASARON 20s")
            $.ajax({
            url: 'http://localhost:8080/enfasisTM4_v3/DataBase/AddEmotion.php?idEmocion=' + idEmocion + '&idUser=' + idUser + ',&idVideo=' + idVideo + ',&categoria=' + categoria + '&emocion=' + emocion,
            type: 'post',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: { idEmocion, idUser, idVideo, categoria, emocion },
            complete: function (rData) {
            }
            });
        variable = 0;
        }

        }

</script>
<script src="./js/codigo.js"></script>

