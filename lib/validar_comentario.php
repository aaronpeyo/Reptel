<?php 
session_start();
require_once'../admin/class/Comentario.php';


if($_POST){

	//if(isset($_SESSION['email'])){ 

	$email= (isset($_REQUEST['email']) ? $_REQUEST['email']:null);
	$mensaje= (isset($_REQUEST['mensaje']) ? $_REQUEST['mensaje']:null);
	$fecha= (isset($_REQUEST['fecha']) ? $_REQUEST['fecha']:null);



	$comentario= new Comentario();
	$comentario->setEmail($email);
	$comentario->setMensaje($mensaje);
	$comentario->setFecha($fecha);
	$comentario->setStatus(1);
	$comentario->guardar();

	echo '<script> 
				alert("Comentario enviado"); 
				window.location.href="../comentarios.php";
			</script>';
			
			
	//}else{
	//	echo '<script> 
	//	alert("Inisia secion primero"); 
	//	window.location.href="../comentarios.php";
	//</script>';	
//}
			

}else{

	
}

 ?>