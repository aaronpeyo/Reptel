<!DOCTYPE html>
<html>
  


  <head>

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN</title>
  <link rel="icon" href="images/tel.png">


  <!-- Para los puntos de quiebre se necesita el <meta> ahi se encuentran los valores de escala-->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->


  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin/template/css/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/template/css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/template/css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/template/css/dist/css/AdminLTE.css"><!--vercion sin comprimir-->
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="admin/template/css/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!------------------------------------------PLUGINS JS--------------------->
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="admin/template/css/bower_components/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap 3.3.7 -->
    <script src="admin/template/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <!-- SlimScroll es un scroll invisible para reducir tamanos de cajas de texto
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
    <!-- FastClick optimizacion en pantallas tactiles-->
    <script src="admin/template/css/bower_components/fastclick/lib/fastclick.js"></script>


    <!-- AdminLTE App base de admin LTE-->
    <script src="admin/template/css/dist/js/adminlte.min.js"></script>
</head>
<body class="login-page">

<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

<img src="images/caiman.png" class="img-responsive" style="padding:30px 100px 0px 100px">    
  </div> 
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">Iniciar secion</p>

    <form action="lib/validar_login.php" method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="email" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">


        
        <!-- /.col -->
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>
        <!-- /.col -->
      </div>

    </form>

  </div>

</div>
<script src="admin/template/css/js/plantilla.js"></script>
</body>
</html>

    <!--

    <div class="social-auth-links text-center">

      <p>- OR -</p>

      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>

      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>

    </div>
    /.social-auth-links 
    <a href="#">I forgot my password</a><br>

    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
   /.login-box-body
</div> -->