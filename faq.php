<?php
include("admin/class/Faq.php");
$usuario = Faq :: recuperarTodos();
include_once('template/header.php');
?>

   
    <body>
        <link rel="stylesheet" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/css/estilo.css">
    
                    
        <hr>        
 <section>
    <div class="container">
        <div class="row">
        <h1> COMENTARIOS </h1>
    </div>
           
         <?php
        $objeto = Faq::recuperarTodos();
         if (count($objeto) > 0):
        ?>
         <div class="row">
            <table class="table table-bordered table-dark">
              <thead>  
                <tr>
                <td>Email </td>
                <td>Mensaje </td>
                <td >Fecha </td >
              
                </tr>
              </thead>
              <tbody>  
                <?php foreach ($objeto as $item): ?>
                <tr> 
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['mensaje']; ?></td>
                    <td><?php echo $item['fecha']; ?></td>
                    
                </tr>
                <br>
                            
                     


                <?php endforeach;?>
              </tbody>  
            </table>
        <?php else: ?>
            <p> No hay comentarios registrados </p>
        <?php endif; ?>
          