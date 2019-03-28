<?php 
session_start();
require_once'../admin/class/Contacto.php';


if($_POST){

	//if(isset($_SESSION['email'])){ 

	$nombre= (isset($_REQUEST['nombre']) ? $_REQUEST['nombre']:null);
	$email= (isset($_REQUEST['email']) ? $_REQUEST['email']:null);
	$numero= (isset($_REQUEST['numero']) ? $_REQUEST['numero']:null);
	$mensaje= (isset($_REQUEST['mensaje']) ? $_REQUEST['mensaje']:null);




	$contacto= new Contacto();
	$contacto->setNombre($nombre);
	$contacto->setNumero($numero);
	$contacto->setMensaje($mensaje);
	$contacto->setEmail($email);
	$contacto->guardar();

	echo '<script> 
				alert("Mensaje enviado correctamente"); 
				window.location.href="../contacto.php";
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