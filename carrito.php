<?php 
include_once 'template/header.php';
require_once 'lib/carritoCompras.php';
 ?>


<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="desmonts/desmonts.html">Desmonts</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><i class="fas fa-home fa-lg"></i>REPTEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="producto.php"><i class="fab fa-product-hunt fa-lg"></i>Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="registrar.php"><i class="fas fa-user-plus fa-lg"></i>  Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="comentarios.php"><i class="fas fa-comments fa-lg"></i> Comentarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contacto.php"><i class="fas fa-headset fa-lg"></i>    Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="faq.php"><i class="fas fa-question-circle"></i>Preguntas frecuentes</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-cart fa-lg"></i>   Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php"><i class="fas fa-sign-in-alt fa-lg"></i>    Iniciar sesi&oacute;n</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php"><i class="fas fa-lock fa-lg"></i>  Cerrar sesi&oacute;n</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
      </div>
    </div>
  </header>












 <div class="container">
 	
	<div class="col-xs-12">
		
		<h1>Carrito de compras</h1>
		<?php 

		if (isset($_SESSION['email'])) {


			$num_producto=0;
			for ($i=0; $i < count($mi_carrito); $i++) { 

				if ($mi_carrito[$i] != NULL) {
					$num_producto = $num_producto +1;
				}

			}
			if ($num_producto > 0) {
				?>

				<table class="table">
					<thead>
						<td>Iamgen</td>
						<td>Nombre</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Subtotal</td>
					</thead>
					<tbody>
						<?php 

						if (isset($mi_carrito)) {
							$total = 0;
							for ($i=0; $i <count($mi_carrito); $i++) { 
								if ($mi_carrito[$i] != NULL) {
									?>
									<tr>
										<td><img src="admin/productos/<?php echo $mi_carrito[$i]['url']; ?>"
											width="100" height="100"></td>
											<td><?php echo $mi_carrito[$i]['nombreProducto']; ?></td>
											<td><?php echo '$ '. $mi_carrito[$i]['precio']; ?></td>
											<td>
												<form action="carrito.php" method="post">
													<input type="hidden" name="" value="<?php echo $i; ?>">
													<input type="number" name="" min="1" max="<?php echo $mi_carrito[$i]['stock']; ?>" value="<?php echo $mi_carrito[$i]['cantidad']; ?>">
													<input type="image" name="update" src="images/update.png" width="25" height="25">

												</form>

											</td>
											<td>
													<?php 
													$subtotal=$mi_carrito[$i]['precio'] *
													 $mi_carrito[$i]['cantidad'];
													 echo '$ '.$subtotal;
													 ?>

											</td>
											<td>
										<form action="carrito.php" method="post">
										<input type="hidden" name="idProductoEliminar" value="<?php echo $i;  ?>">
										<input type="image" name="delete" src="images/eliminar.png" width="25" height="25">
								</form>
								</td>
								</tr>
								<?php
								}
							}
						}
						 ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Total</td>
				<td><?php echo '$ '.$total; ?></td>
			</tr>



					</tbody>
				</table>
				<form action="procesoCompra.php" method="post">
					<input type="hidden" name="total" value="<?php echo $total; ?>">
					<a href="producto.php" class="btn btn-success">Seguir comprando</a>
					<input type="submit" value="Continuar" class="btn btn-lg btn-primary">
				</form>
			</div>
		</div>
	</body>

				<?php 
				
			}else{

				echo '<p>No hay productos en el carrito<a href="producto.php" Comprar ahora</a></p>';

			}

		}else{
			echo '<p>Para agregar productos al carrito primero debe <a href"login.php">Iniciar secion</a></p>';
		}

 ?>
		
		<?php include_once 'template/footer.php'; ?>

