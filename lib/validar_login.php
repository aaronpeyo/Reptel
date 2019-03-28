<?php
session_start();
require_once '../admin/class/Usuario.php';

if ($_POST) {

	$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
	$password = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;

	$usuario = new Usuario();
	$usuario->setEmail($email);
	$usuario->setPassword($password);
	$login = $usuario->logIn();

	if($login == true){
		if($_SESSION['privilegios'] !=3){//aqui cansela los privilejios a los usuario normales por sus privilegios
		/*echo '<script>
				alert("Registrado...");
			</script>';*/
			
		header('Location: ../admin/index/index.php');
		}else{
			header('Location: ../index.php');
		}
	}else{
	
		//echo '<h1>Access Denied</h1>';
		header('Location: ../index.php');
	
	}
	}
	?>