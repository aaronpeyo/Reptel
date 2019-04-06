<?php
require_once'../class/Comentario.php';
$idComentario = (isset($_REQUEST['idComentario'])) ? $_REQUEST['idComentario'] : null;

if($idComentario){
    $comentario = Comentario::buscarPorId($idComentario);
    $comentario->eliminar();
  echo "<script>
                alert('Comentario eliminado correctamente');
                window.location= 'index.php'
    </script>";

}
?>