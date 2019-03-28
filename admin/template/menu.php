<!--En esta seccion de modulos se crea el menu haciendo uso de iconos 
y clases de Admin LT, aqui solo est el diseno de la pagna
-->

<aside class="main-sidebar">

     <section class="sidebar">

        <ul class="sidebar-menu">

            <li class="active"><!--Active se pone como activo el enlace -->

                <a href="../../index.php">

                    <i class="fa fa-home"></i> <!--Las etiquetas i son iconos-->
                    <span>Ver sitio</span><!--Los span son los titulos-->

                </a>

            </li>

            <li>

                <a href="../usuarios/index.php">

                    <i class="fa fa-user"></i>
                    <span>Usuarios</span>

                </a>

            </li>

            <li>

                <a href="../categorias/index.php">

                    <i class="fa fa-th"></i>
                    <span>Categorías</span>

                </a>

            </li>

            <li>

                <a href="../productos/index.php">

                    <i class="fa fa-product-hunt"></i>
                    <span>Productos</span>

                </a>

            </li>
<li class="treeview">

                <a href="#">

                    <i class="fa fa-users"></i>
                    
                    <span>Contactos</span>
                    
                    <span class="pull-right-container">
                    
                        <i class="fa fa-angle-left pull-right"></i>

                    </span>

                </a>
                

                <ul class="treeview-menu">
                    
                    <li>

                        <a href="../faq/index.php">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>FAQ</span>

                        </a>

                    </li>

                    <li>

                        <a href="../comentarios/index.php">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>Comentarios</span>

                        </a>

                    </li>

                      <li>

                        <a href="../contacto/index.php">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>Contacto</span>

                        </a>

                    </li>


                </ul>



            </li>


            <li class="treeview">

                <a href="#">

                    <i class="fa fa-list-ul"></i>
                    
                    <span>Ventas</span>
                    
                    <span class="pull-right-container">
                    
                        <i class="fa fa-angle-left pull-right"></i>

                    </span>

                </a>


                <ul class="treeview-menu">
                    
                    <li>

                        <a href="../pedidos/index.php">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>Administrar pedidos</span>

                        </a>

                    </li>

                    <li>

                        <a href="../slide/index.php">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>Slide</span>

                        </a>

                    </li>

                    <li>

                        <a href="reporteDeVentas">
                            
                            <i class="fa fa-circle-o"></i>
                            <span>Reporte de ventas</span>

                        </a>

                    </li>

                </ul>

            </li>

        </ul>

     </section>

</aside>

<!-- Para realizar todo el diseno se tomo como referencia el archivo de admin LTE:
AdminLTE-2.4.2/pages/examples/blank.html ahi se encuentra toda la estructura parecida, lo unico que realice es dividir todo basandome en un modelo MVC "Modelo Vista Controlador"
Echo por Eber Emanuel Hernandez Martinez
-->