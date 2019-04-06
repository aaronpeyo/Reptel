<?php 
include_once('template/header.php');/*required_once frena todo vincular a classes, métodos								include_once no detiene, puro diseño*/
?>
<!--
	<div class="row"><!--row 3-
		<div class="col-xs-12">
			
			<?php //if(isset($_SESSION['email'])){ ?>
			<p>Bienvenido: <?php //echo $_SESSION['email'] //con ese codigo se muestra el correo del usuario?> </p>
			<?php// } ?>
		</div>
	</div><!-- fin row 3--




<div class="center-block">
	<div class="col-xs-12">
	<video width="100%" height="100%" src="images/VIDEO PROMOCIONAL.mp4" controls>
Video comercial    
</video>
</div>
	
</div>
-->

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

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Servicios</h2>
          <h3 class="section-subheading text-muted">Venta de accesorios y reparación de celulares</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">E-Commerce</h4>
          <p class="text-muted">Puedes adquirir productos atravez de nuestro sitio WEB en la seccion de productos.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Fácil</h4>
          <p class="text-muted">Con unos cuantos clicks puedes adquirir los productos disponibles en nuestro establecimiento.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Seguro</h4>
          <p class="text-muted">Nuestro sitio cuenta con certificado SSL y con un sistema de encryptacion de contraseñas.</p>
        </div>
      </div>
    </div>
  </section>





<!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">


          <h2 class="section-heading text-uppercase">Galerias</h2>
          <h3 class="section-subheading text-muted">Conoce nuestro establecimiento y diverzos productos.</h3>
          <br>
          <br>
          <video src="images/VIDEO PROMOCIONAL.mp4" width="640" height="360" controls autoplay preload></video>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/WhatsApp Image 2019-04-04 at 11.37.05 PM.jpeg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Logo</h4>
            <p class="text-muted">Echo por desmont</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/oferta.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Oferta especial.</h4>
            <p class="text-muted">Descuento de apertura.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/iStock-479631134-1024x683-1.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Descuento espcial.</h4>
            <p class="text-muted">Descuento en envios.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Tegnologia</h4>
            <p class="text-muted">Por parte del equipo de investigacion</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Diseñador</h4>
            <p class="text-muted">Equipo de diseño trabajando</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="images/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Fotografias</h4>
            <p class="text-muted">Nuestro fotografo trabajando duro.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Logo</h2>
                <p class="item-intro text-muted">Este logo fue creado por nuestro diseñador Alexis.</p>
                <img class="img-fluid d-block mx-auto" src="images/WhatsApp Image 2019-04-04 at 11.37.05 PM.jpeg" alt="">
                <p>Nuestro equipo de trabajo esta trabajando duro para ofrecerles la mejor experiencia al utilizar nuestro sitio WEB</p>
                <ul class="list-inline">
                  <li>Date: 04/04/2019</li>
                  <li>Diseñador: Alexis Chavez</li>
                  <li>Categoria: Logo</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Descuento!!!!</h2>
                <p class="item-intro text-muted">Por apertura de nuestro e-commerce.</p>
                <img class="img-fluid d-block mx-auto" src="images/oferta.jpg" alt="">
                <p>La oferta que ofrecemos es el 2x1 en todos los productos presentes en este e-coomerce, desde celulares hasta micas, cualquier accesorio o producto que este disponible.</p>
                <ul class="list-inline">
                  <li>Fecha: 05/04/2019</li>
                  <li>Valido hasta: 05/05/2019</li>
                  <li>Categoria: Oferta</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Descuento!!!!</h2>
                <p class="item-intro text-muted">Por cuestiones de apertura descuento en envios.</p>
                <img class="img-fluid d-block mx-auto" src="images/iStock-479631134-1024x683-1.jpg" alt="">
                <p>El descuento que nuestra empresa REPTEL ofrece por cuestiones de apertura de su nuevo e-commerce es un descuento del 20% en todos los envios nacionales.</p>
                <ul class="list-inline">
                  <li>Fecha: 05/04/2019</li>
                  <li>Fecha de vencimiento: 06/05/2019</li>
                  <li>Categoria: Descuento</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Uso de la mejor tegnologia.</h2>
                <p class="item-intro text-muted">Nuestro equipo de investigacion y tecnicos trabjando duro.</p>
                <img class="img-fluid d-block mx-auto" src="images/04-full.jpg" alt="">
                <p>Nuestro equipo de investigadores y los tecnicos encargados del manejo de las nuevas tegnologias, nos mantienen a la vanguardia de esta, con el fin de ofrecerles la mejor experiencia a nuestros usuarios.</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Diseñadores</h2>
                <p class="item-intro text-muted">Nuestro equipo de diseñadores trabajndo duro.</p>
                <img class="img-fluid d-block mx-auto" src="images/05-full.jpg" alt="">
                <p>Nuestro equipo de diseñadores conformado por Aaron y Alexis se encargan de traernos los mejores diseños y convinaciones de colores y objetos para mejorar la calidad de nuestro sitio e-commerce, les agradecemos mucho todo su esfuerzo.</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Fotografo profecional.</h2>
                <p class="item-intro text-muted">REPTEL cuenta con un buen fotografo del cual queremos hablarles.</p>
                <img class="img-fluid d-block mx-auto" src="images/06-full.jpg" alt="">
                <p>No solo es nuestro fotografo profecional, si no tambien nuestro querido lider de proyecto, Aaron Pedro Hernandez Jacobo, es el encargado de que todo nuestro proyecto funcione y de tener muy buenas fotografias para el citio.</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar Ventana</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!--------------------------------------------
                      LOGO ANIMADO 2
          ----------------------------------------->
          <!-- links necesarios-->
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <script type="text/javascript" charset="utf-8" src="js/content_creation_edgePreload.js"></script>
    <style>
        .edgeLoad-EDGE-455333329 { visibility:hidden; }
    </style>

    <div id="Stage" class="EDGE-455333329">
  </div>

</body>





















<?php 
include_once('template/footer.php');
?>