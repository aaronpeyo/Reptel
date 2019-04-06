<?php
require_once'../class/Faq.php';
$idFaq = (isset($_REQUEST['idFaq'])) ? $_REQUEST['idFaq'] : null;

if($idFaq){
    $faq = Faq::buscarPorId($idFaq);
    $faq->eliminar();
  echo "<script>
                alert('Pregunta eliminada correctamente');
                window.location= 'index.php'
    </script>";

}
?>