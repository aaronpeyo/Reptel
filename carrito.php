<?php 
include_once 'template/header.php';
require_once 'lib/carritoCompras.php';
 ?>

 <div class="row">
 	
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
				<?php 
				
			}else{

				echo '<p>No hay productos en el carrito<a href="producto.php" Comprar ahora</a></p>';

			}

		}else{
			echo '<p>Para agregar productos al carrito primero debe <a href"login.php">Iniciar secion</a></p>';
		}

 ?>
		
		<?php include_once 'template/footer.php'; ?>







	</div>

















 </div>