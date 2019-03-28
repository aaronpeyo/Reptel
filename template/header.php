<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/caiman.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Proyecto</title>


	<link rel="stylesheet" type="text/css" href="js/booststrap.min.css">

	<link rel="stylesheet" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/css/estilo.css">
    
	<script src="js/jquerty.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script><!-- opcional -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<div class="container"><!--container-->

		<div class="row"><!--row 1-->
			<div class="col-xs-12">
				<img src="images/banner.jpg" style="width: 100%"> <!--opcional el estilo aquí, sue puede hacer aparte -->
		
			</div>
		</div><!-- fin row 1-->
		
					<!--Barra de navegacion -->
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><i class="fas fa-home fa-lg"></i>  RepTEL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="producto.php"><i class="fab fa-product-hunt fa-lg"></i>   Productos</a></li>
		<li><a href="registrar.php"><i class="fas fa-user-plus fa-lg"></i>  Registrar</a></li>
      <li><a href="comentarios.php"><i class="fas fa-comments fa-lg"></i> Comentarios</a></li>
			<li><a href="contacto.php"><i class="fas fa-headset fa-lg"></i>    Contacto</a></li>

	
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="carrito.php" ><i class="fas fa-shopping-cart fa-lg"></i>   Carrito</a></li>
	<li class="active"><a href="login.php" ><i class="fas fa-sign-in-alt fa-lg"></i>    Iniciar sesi&oacute;n</a></li>
    <li class="active"><a href="logout.php" ><i class="fas fa-lock fa-lg"></i>  Cerrar sesi&oacute;n</a></li>
	</ul>
  </div>
</nav>
</div>
</body>
</html>



