<?php 
if (isset($_POST['idProducto'])) {
//Proceso para agregar el primer producto al carrito

$idProducto = (isset($_REQUEST['idProducto'])) ? $_REQUEST['idProducto'] : null;
$url = (isset($_REQUEST['url'])) ? $_REQUEST['url'] : null;
$nombreProducto = (isset($_REQUEST["nombreProducto"])) ? $_REQUEST["nombreProducto"] : null;
$precio = (isset($_REQUEST['precio'])) ? $_REQUEST['precio'] : null;
$stock = (isset($_REQUEST['stock'])) ? $_REQUEST['stock'] : null;
$cantidad = (isset($_REQUEST['cantidad'])) ? $_REQUEST['cantidad'] : null;
$mi_carrito[] = array('idProducto' => $idProducto, 'url' => $url, 'nombreProducto' => $nombreProducto, 'precio' => $precio, 'stock' => $stock, 'cantidad' => $cantidad);
}

//proceso para agregar un nuevo producto

if (isset($_SESSION['carrito'])) {

	$mi_carrito = $_SESSION['carrito'];
	if (isset($_POST['idProducto'])) {
		$idProducto = $_POST['idProducto'];
		$url = $_POST['url'];
		$nombreProducto = $_POST['nombreProducto'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
		$stock = $_POST['stock'];
	

//verificacion par aver que si es o no repetido el producto
//si esta repetido se le suma uno y ya 
$pos = -1;
for ($i = 0; $i <count($mi_carrito); $i++) { //el metodo count nos sirve para ir contanto

		if ($idProducto == $mi_carrito[$i]['idProducto']) {
			$pos = $i;
		}
}
if ($pos != -1) {
	$cuanto = $mi_carrito[$pos]['cantidad'] + $cantidad;
	$mi_carrito[$pos] = array('idProducto' => $idProducto, 'url' => $url, 'nombreProducto' => $nombreProducto, 'precio' => $precio, 'cantidad' => $cuanto, 'stock' => $stock );
}else{
	$mi_carrito []= array('idProducto'=>$idProducto, 'url'=>$url, 'nombreProducto' => $nombreProducto, 'precio' => $precio, 'cantidad' => $cantidad, 'stock' => $stock);
}
}
}

//actualiar cantidad de productosdel carrito de compras
if (isset($_POST['idProductoActualizar'])) {
	$idProductoActualizar = $_POST['idProductoActualizar'];
	$cantidadActualizada = $_POST['cantidadActualizada'];
	$mi_carrito[$idProductoActualizar]['cantidad'] = $cantidadActualizada;
	# code...
}

//se elimina un producto del carrito
if (isset($_POST['idProductoEliminar'])) {
	$idProductoEliminar = $_POST['idProductoEliminar'];
	$mi_carrito[$idProductoEliminar] = NULL;
}
//se crea una sesion del carrito de compras
if (isset($mi_carrito)) {
	$_SESSION['carrito'] = $mi_carrito;
}

