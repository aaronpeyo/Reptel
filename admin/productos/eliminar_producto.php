<?php
require_once'../class/Producto.php';
$idProducto = (isset($_REQUEST['idProducto'])) ? $_REQUEST['idProducto'] : null;

 


if($idProducto){//si se detecta el id entonces...
    $producto = Producto::buscarPorId($idProducto);//se hace un objeto con el producto con el id encontrado
    $producto->eliminar();//se elimina el objeto
    
    unlink($producto->getUrl());//se elimina la foto o archivo que se encuentre en la url del producto con el id encontrado
    //unlink(); elimina el archivo dentro de la ruta especificada 

    echo "<script>
                alert('Producto eliminado correctamente');
                window.location= 'index.php'
    </script>";
}
?>