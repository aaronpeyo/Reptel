<?php
include("admin/class/Faq.php");
$usuario = Faq :: recuperarTodos();
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
       
 <section>
    <div class="container">
        <div class="row">
        <h1> Preguntas </h1>
    </div>
           
         <?php
        $objeto = Faq::recuperarTodos();
         if (count($objeto) > 0):
        ?>
         <div class="row">
            <table class="table table-dark">
              <thead>  
                <tr class="success">
                <td>Pregunta </td>
                <td>Respuesta </td>
                <td >Fecha </td >
                </tr>
              </thead>
              <tbody>  
                <?php foreach ($objeto as $item): ?>
                <tr class="warning"> 
                    <td><?php echo $item['pregunta']; ?></td>
                    <td><?php echo $item['respuesta']; ?></td>
                    <td><?php echo $item['fecha']; ?></td> 
                </tr>
                <?php endforeach;?>
              </tbody>  
            </table>
          </div>
        </div>
      </section>
    </body>
                   <?php else: ?>
            <p> No existen preguntas registradas </p>
        <?php endif; ?>

        <?php 
include_once('template/footer.php');
?>