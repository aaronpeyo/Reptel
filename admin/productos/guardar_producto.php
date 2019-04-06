<?php 
    require_once '../class/Producto.php';
    require_once '../class/Categoria.php';
    $categoria = Categoria::recuperarTodos();
    $ID = (isset($_REQUEST['idProducto'])) ? $_REQUEST['idProducto'] : null;
    if($ID){        
        $objeto = Producto::buscarPorId($ID);        
    }else{
        $objeto = new Producto();
    }

?>
<link rel="stylesheet" href="../../template/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../template/css/estilo.css">
    
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  
    if($_FILES['imagen']['type']== 'image/jpg' || $_FILES['imagen']['type'] == 'image/jpeg' || $_FILES['imagen']['type'] == 'image/png'){
      $rutaServidor = 'uploads';
      $rutaTemporal = $_FILES['imagen']['tmp_name'];
      $nombreImagen = $_FILES['imagen']['name'];
      $rutaDestino = $rutaServidor.'/'.$nombreImagen;
      move_uploaded_file($rutaTemporal, $rutaDestino);
      unlink($objeto->getUrl()); //en caso de que se haya recibido nueva foto se elimina la ruta anterior


      $idCategoria = (isset($_POST['idCategoria'])) ? $_POST['idCategoria'] : null;
      $nombreProducto = (isset($_POST['nombreProducto'])) ? $_POST['nombreProducto'] : null;
      $precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;
      $stock = (isset($_POST['stock'])) ? $_POST['stock'] : null;
      $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : null;


        $objeto->setUrl($rutaDestino);
        $objeto->setIdCategoria($idCategoria);
        $objeto->setNombreProducto($nombreProducto);
        $objeto->setPrecio($precio);
        $objeto->setStock($stock);
        $objeto->setDescripcion($descripcion);
        $objeto->guardar();
       echo "<script>
                alert('Producto agregado correctamente');
                window.location= 'index.php'
    </script>";
    }else if($_Files["imagen"]==null){
      

         $url2 = (isset($_POST['url2'])) ? $_POST['url2'] : null;
        $idCategoria = (isset($_POST['idCategoria'])) ? $_POST['idCategoria'] : null;
        $nombreProducto = (isset($_POST['nombreProducto'])) ? $_POST['nombreProducto'] : null;
        $precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;
        $stock = (isset($_POST['stock'])) ? $_POST['stock'] : null;
        $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : null;
  
  
          $objeto->setUrl($url2);
          $objeto->setIdCategoria($idCategoria);
          $objeto->setNombreProducto($nombreProducto);
          $objeto->setPrecio($precio);
          $objeto->setStock($stock);
          $objeto->setDescripcion($descripcion);
          $objeto->guardar();
          header('Location: index.php');
        
      
    }else{
              // echo'<p class"alert alert-warning">Mensaje</p>';

    }

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
================ MODIFICAR PRODUCTO=========================
===================================================================-->

 <br>
<div class="container">
  <div class="row">
      
      
   <div class="page-header">
  <h1>Registrar En Base De Datos<small> (Agregar o Actualizar)</small></h1>
</div>
      
      
    <form class="form-horizontal" enctype="multipart/form-data" action="guardar_producto.php" method="POST">
      <?php if($objeto->getIdProducto()): ?>
                <input type="hidden" name="idProducto" value="<?php echo $objeto->getIdProducto() ?>" />
      <?php endif; ?>
      <div class="form-group">
        <label class="control-label col-sm-2">Imagen</label>
        <div class="col-sm-10">
        <?php
        if($objeto->getUrl() != null){
          ?>
      <img src="<?php echo $objeto->getUrl()?>" width="100" height="100">
     
          <?php

        }    

?>
          <input type="file" class="form-control" name="imagen" required>
        </div>
      </div>
      <!--Sección de campo 1-->
      <div class="form-group">
        <label class="control-label col-sm-2">Categoria</label>
        <div class="col-sm-10"> 
        <select name="idCategoria" class="form-control">

          <option value="">Selecciona una categoria </option>
          <?php
          foreach ($categoria as $item) {
          ?>
     
            <option value="<?php $item['idCategoria'] ?>"><?php echo $item['nombreCategoria']?> 
            </option>

            <?php
          }
            ?>
            </select>
       </div>
      </div>
      <!--Sección de campo 2-->
      <div class="form-group">
        <label class="control-label col-sm-2">Nombre del producto</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" placeholder="ingresa el nombre del Producto" name="nombreProducto" required value="<?php echo $objeto->getNombreProducto() ?>">
        </div>
      </div>
         <div class="form-group">
        <label class="control-label col-sm-2">Precio</label>
        <div class="col-sm-10">          
          <input type="number" class="form-control" placeholder="ingresa el precio" name="precio" required value="<?php echo $objeto->getPrecio() ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Existencia</label>
        <div class="col-sm-10">          
          <input type="number" class="form-control" placeholder="ingresa la cantidad de productos existentes" name="stock" required value="<?php echo $objeto->getStock() ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Descripcion</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" placeholder="ingresa una descripcion del producto" name="descripcion" required value="<?php echo $objeto->getDescripcion() ?>">
        </div>
      </div>
      <!--Sección de campo 3-->

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success" href="index.php">Guardar</button>
          <br>
          <br>
          <a type="link" class="btn btn-danger" href="index.php">Cancelar</a>
        </div>
      </div>
      <input type="hidden" class="form-control"  name="url2" required value="<?php echo $objeto->getUrl() ?>">

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
