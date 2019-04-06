<?php
include_once('template/header.php');
include("admin/class/Producto.php");
$productos = Producto :: recuperarTodos();

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

 <!----------------------------------------------
              Donde se listan los productos
        ----------------------------------------------------->
        
    
        <div>
        <h1> Productos </h1>
        </div>
         
         <?php
         if (count($productos) > 0):
        ?>
            <?php foreach ($productos as $item): ?>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2">
                  
                
            
            <!--=========================================
                Nombre y precio del producto con imagen
             ===========================================-->

            <h4 class="text-center"> <?php echo $item['nombreProducto']; ?> </h4>
            <img src="admin/productos/<?php echo $item['url']?>"
            class="img-responsive" alt="">
            <p class="text-center">Precio  <?php echo $item['precio'];?></p>
          </div>
        </div>
      </div>
          
           <!--=========================================
                FORM CON INFORMACION DEL PRODUCTO
             ===========================================-->
                <form action="carrito.php" method="post">
                    
                    <input type="hidden" name="idProducto" value="<?php echo $item
                    ['idProducto']?>">

                    <input type="hidden" name="url" value="<?php echo $item['url']?>">


                    <input type="hidden" name="nombreProducto" value="<?php echo $item['nombreProducto']?>">

                    <input type="hidden" name="precio" value="<?php echo $item['precio']?>">

                    <input type="hidden" name="stock" value="<?php echo $item['stock']?>">

                    <input type="hidden" name="cantidad" value="1">

                    <input type="submit" name="agregar" class="btn btn-primary center-block" value="Agregar">

                </form>

                


                <?php endforeach;?>
           </div>
       </section>
</body>
   

           
        <?php else: 
            echo '<p class="alert alert-warning"No hay producto></p>';
            ?>
        <?php endif; ?>
<?php 
include_once('template/footer.php');
?>