<?php
    require_once '../class/Usuario.php';
    $ID = (isset($_REQUEST['idUsuario'])) ? $_REQUEST['idUsuario'] : null;
    if($ID){        
        $objeto = Usuario::buscarPorId($ID);        
    }else{
        $objeto = new Usuario();
    }



    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = (isset($_POST['email'])) ? $_POST['email'] : null;
        $password = (isset($_POST['password'])) ? $_POST['password'] : null;
        $estatus = (isset($_POST['estatus'])) ? $_POST['estatus'] : null;
        $privilegios = (isset($_POST['privilegios'])) ? $_POST['privilegios'] : null;
        
        $objeto->setEmail($email);
        $objeto->setPassword($password);
        $objeto->setEstatus($estatus);
        $objeto->setPrivilegios($privilegios);
        $objeto->guardar();
       header('Location: index.php');
       die();
    }else{

?>
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

        Usuarios

        <small>Gestion de usuarios</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Usuarios</a></li>

        <li class="active">Gestion de usuarios</li>

      </ol>

    </section>

    <section class="content">


      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar el usuario seleccionado</h3>

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
================ MODIFICAR USUARIO=========================
===================================================================-->

 <link rel="stylesheet" href="../../template/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../template/css/estilo.css">
    
    <br>

<div class="container">
  <div class="row">
      
      
   <div class="page-header">
  <h1>Registrar En Base De Datos<small> (Agregar o Actualizar)</small></h1>
</div>
      
      
    <form class="form-horizontal" action="guardar_usuario.php" method="POST">
      <?php if($objeto->getIdUsuario()): ?>
                <input type="hidden" name="idUsuario" value="<?php echo $objeto->getIdUsuario() ?>" />
      <?php endif; ?>
      <div class="form-group">
        <label class="control-label col-sm-2">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Ingresa el email" name="email" required value="<?php echo $objeto->getEmail() ?>">
        </div>
      </div>
      <!--Sección de campo 1-->
      <div class="form-group">
        <label class="control-label col-sm-2">Password</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" placeholder="ingresa el pass" name="password" required value="<?php echo $objeto->getPassword() ?>">
        </div>
      </div>
      <!--Sección de campo 2-->
      <div class="form-group">
        <label class="control-label col-sm-2">Estatus</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" placeholder="ingresa el estatus" name="estatus" required value="<?php echo $objeto->getEstatus() ?>">
        </div>
      </div>
         <div class="form-group">
        <label class="control-label col-sm-2">Privilegios</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" placeholder="ingresa el privilegio" name="privilegios" required value="<?php echo $objeto->getPrivilegios() ?>">
        </div>
      </div>
      <!--Sección de campo 3-->

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success" href="index.php">Guardar</button>
          <br>
          <br>
          <a  class="btn btn-danger" href="index.php">Cancelar</a>
        </div>
      </div>
    </form>
  </div>

</div><!--fin del div del container-->
<?php
  }    
?>
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
