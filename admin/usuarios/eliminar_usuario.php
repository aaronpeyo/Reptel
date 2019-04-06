<?php
require_once'../class/Usuario.php';
$idUsuario = (isset($_REQUEST['idUsuario'])) ? $_REQUEST['idUsuario'] : null;

if($idUsuario){
    $usuario = Usuario::buscarPorId($idUsuario);
    $usuario->eliminar();
 
     echo "<script>
                alert('Usuario eliminado correctamente');
                window.location= 'index.php'
    </script>";

}
?>