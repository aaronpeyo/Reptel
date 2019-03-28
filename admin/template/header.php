<?php 
session_start();
 ?>
<header class="main-header">
<!--===================================
            LOGO TIPO
======================================-->
<a href="../index/index.php" class="logo"><!--Logo es una clase de admin LT-->

<!--Logo mini-->
<span class="logo-mini">
<img src="../../images/caiman.png" class="img-responsive" style="padding:10px">
</span>


<!--Logo Normal-->
<span class="logo-lg">
<img src="../../images/bannerlineal.png" class="img-responsive" style="padding:10px 0px">
</span>

</a>

<!--===================================
            BARRA DE NAVEGACION
======================================-->
<nav class="navbar navbar-static-top" role="navigation">

                    <!--boton de navegacion-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                 <span class="sr-only">Toggle navegation</span>
            </a>

<!--Boton de usuario-->
<div class="navbar-custom-menu">

    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../images/anonimo.png" class="user-image">
                <span hidden-xs>Administrador</span>
            </a>
    <!--Drop down toggle -->
    <ul class="dropdown-menu">

        <li class="user-body">

                <div class="pull-right">

                    <a href="../../logout.php" class="btn btn-default btn-flat">Salir</a>

              
                </div>

        </li>

    </ul>  


        </li>
    </ul>
</div>


</nav>

</header>
