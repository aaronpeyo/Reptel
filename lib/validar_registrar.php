<?php 
session_start();
require_once'../admin/class/Usuario.php';

if($_POST){

	$email= (isset($_REQUEST['email']) ? $_REQUEST['email']:null);
	$password= (isset($_REQUEST['password']) ? $_REQUEST['password']:null);

	$usuario= new Usuario();
	$usuario->setEmail($email);
	$usuario->setPassword($password);
	$usuario->setEstatus(1);
	$usuario->setPrivilegios(3);
	$usuario->guardar();

	echo '<script> 
				alert("Registro exitoso"); 
				window.location.href="../login.php";
			</script>';

}else{

	
}

 ?>