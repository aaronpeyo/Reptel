<?php 
include_once('template/header.php');
?>
<div class="row">
 	<div class="col-xs-12">
 		<h1>Registrar</h1>
		 <form action="lib/validar_registrar.php" method="post">
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

 	</div>
 </div> 	
<?php 
	include_once('template/footer.php');
 ?>
 	