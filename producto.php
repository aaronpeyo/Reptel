<?php
include_once('template/header.php');
include("admin/class/Producto.php");
$productos = Producto :: recuperarTodos();

?>

   
    <body>
        <link rel="stylesheet" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/css/estilo.css">
    
                    
        <hr>        
 <section>
   
        <div>
        <h1> Productos </h1>
        </div>
         
         <?php
         if (count($productos) > 0):
        ?>
            <?php foreach ($productos as $item): ?>
            <div class="col-xs-12 col-sm-4">
            
            <!--=========================================
                Nombre y precio del producto con imagen
             ===========================================-->

            <h4 class="text-center"> <?php echo $item['nombreProducto']; ?> </h4>
            <img src="admin/productos/<?php echo $item['url']?>"
            width="100" height="100" class="center-block" >
            <p class="text-center">Precio  <?php echo $item['precio'];?></p>
          
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
           
        <?php else: 
            echo '<p class="alert alert-warning"No hay producto></p>';
            ?>
        <?php endif; ?>
          <br>

<br>
