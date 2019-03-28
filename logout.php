<?php
session_start();
unset($_SESSION['email']);//Borar contenido de esa sesión
unset($_SESSION['password']);
session_destroy();
header('Location:index.php');
?>