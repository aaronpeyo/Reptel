<?php 
include_once('template/header.php');/*required_once frena todo vincular a classes, métodos
									include_once no detiene, puro diseño*/
?>

	<div class="row"><!--row 3-->
		<div class="col-xs-12">
			
			<?php if(isset($_SESSION['email'])){ ?>
			<p>Bienvenido: <?php echo $_SESSION['email'] //con ese codigo se muestra el correo del usuario?> </p>
			<?php } ?>
		</div>
	</div><!-- fin row 3-->




<div class="center-block">
	<div class="col-xs-12">
	<video width="100%" height="100%" src="images/VIDEO PROMOCIONAL.mp4" controls>
Video comercial    
</video>
</div>
	
</div>

<?php 
include_once('template/footer.php');
?>