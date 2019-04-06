<?php
include_once('template/header.php');
?>

   
   
 <body id="page-top">

  <!----------------------------------------------
                  El NAVBAR DE LA PAGINA
    ----------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="desmonts/desmonts.html">Desmonts</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><i class="fas fa-home fa-lg"></i>REPTEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="producto.php"><i class="fab fa-product-hunt fa-lg"></i>Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="registrar.php"><i class="fas fa-user-plus fa-lg"></i>  Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="comentarios.php"><i class="fas fa-comments fa-lg"></i> Comentarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contacto.php"><i class="fas fa-headset fa-lg"></i>    Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="faq.php"><i class="fas fa-question-circle"></i>Preguntas frecuentes</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-cart fa-lg"></i>   Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php"><i class="fas fa-sign-in-alt fa-lg"></i>    Iniciar sesi&oacute;n</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php"><i class="fas fa-lock fa-lg"></i>  Cerrar sesi&oacute;n</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
      </div>
    </div>
  </header>
    <div class="container">
        <div class="row">
        <h1> Contacto </h1>
    </div>
<br>
<form action="lib/validar_contacto.php" method="post">
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="tel">Numero</label>
    <input type="text" class="form-control" name="numero">
  </div>
  <div class="form-group">
  <label  for="mensaje">Ingresa tu mensaje</label>
    <textarea class="form-control" rows="5" name="mensaje" required></textarea>
  </div>
 
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
</div>
</body>
<?php 
include_once('template/footer.php');
?>