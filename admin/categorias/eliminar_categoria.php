<?php
require_once'../class/Categoria.php';
$idCategoria = (isset($_REQUEST['idCategoria'])) ? $_REQUEST['idCategoria'] : null;

if($idCategoria){
    $categoria = Categoria::buscarPorId($idCategoria);
    $categoria->eliminar();
  echo "<script>
                alert('Categoria eliminada correctamente');
                window.location= 'index.php'
    </script>";

}
?>