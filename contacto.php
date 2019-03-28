<?php
include_once('template/header.php');
?>

   
    <body>
        <link rel="stylesheet" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/css/estilo.css">
    
                    
        <hr>        
 <section>
    <div class="container">
        <div class="row">
        <h1> Contacto </h1>
    </div>
<br>
<form action="lib/validar_contacto.php" method="post">
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="numero">Numero</label>
    <input type="number" class="form-control" name="numero">
  </div>
  <div class="form-group">
  <label  for="mensaje">Ingresa tu mensaje</label>
    <textarea class="form-control" rows="5" name="mensaje"></textarea>
  </div>
 
  <button type="submit" class="btn btn-success">Enviar</button>
</form>