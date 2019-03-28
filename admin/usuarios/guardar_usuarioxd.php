<?php 
    include('../template/header.php');
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
    }else{

  ?>
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
          <button type="link" class="btn btn-danger" href="index.php">Cancelar</button>
        </div>
      </div>
    </form>
  </div>

</div><!--fin del div del container-->
<?php
  }    
?>
    
    