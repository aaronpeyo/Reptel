<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cpanel</title>
  <link rel="icon" href="../../images/tel.png">


  <!-- Para los puntos de quiebre se necesita el <meta> ahi se encuentran los valores de escala-->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->


  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../template/css/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../template/css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/css/dist/css/AdminLTE.css"><!--vercion sin comprimir-->
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="../template/css/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!------------------------------------------PLUGINS JS--------------------->
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../template/css/bower_components/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap 3.3.7 -->
    <script src="../template/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <!-- SlimScroll es un scroll invisible para reducir tamanos de cajas de texto
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
    <!-- FastClick optimizacion en pantallas tactiles-->
    <script src="../template/css/bower_components/fastclick/lib/fastclick.js"></script>


    <!-- AdminLTE App base de admin LTE-->
    <script src="../template/css/dist/js/adminlte.min.js"></script>
</head>

<!--*********************************************************** *
 *****************CUERPO DE LA PLANTILLA***************
 Eber Emanuel Hernandez Martinez 01/03/19
***********************************************************/-->
<!--***********Antes del sidebar-mini debe ir el sidebar-collapse para que al entrar este cerrada la barra************* */-->
<body class="hold-transition skin-green sidebar-collapse sidebar-mini">
<!-- con login page ya se incluye el login-->




<?php



echo '<div class="wrapper">';
/*********************
        *HEADER*
 ***********************/
include'../template/header.php';

/*********************
        *MENU*
 ***********************/
include'../template/menu.php';

/***************************************
        *Contenido*
 **************************************/
?>
<div class="content-wrapper">

    <section class="content-header">

      <h1>

        CPANEL

        <small>Gestion del BACKEND</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>CPANEL</a></li>

        <li class="active">Gestion del BACKEND</li>

      </ol>

    </section>

    <section class="content">


      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">USA LA BARRA DE NAVEGACION</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<!--============================================================================ 
================TABLA USUARIOS CON EL FOREACH=========================
===================================================================-->

        
        <!--============================================================================ 
================FIN DE LA TABLA USUARIOS=========================
===================================================================-->


        </div>

        <div class="box-footer">
          RepTEL S.A del C.V
        </div>
        
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <?php
  

/***************************************
             *Footer*
 **************************************/



include'../template/footer.php';

echo '</div>';

?>
 



<script src="../js/plantilla.js"></script>
</body>
</html>
