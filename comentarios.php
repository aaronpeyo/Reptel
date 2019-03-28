<?php
include("admin/class/Comentario.php");
$usuario = Comentario :: recuperarTodos();
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
        $objeto = Comentario::recuperarTodos();
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
          <br>

<br>
<form action="lib/validar_comentario.php" method="post">
    <label  for="comment">Ingresa tu correo</label>
    <input type="email" name="email">
    <br>
    <br>
    <label  for="comment">Ingresa tu comentario</label>
    <textarea class="form-control" rows="5" name="mensaje"></textarea>
    <input type="hidden" name="fecha" value="<?php echo date('d/m/Y') ?>"><!--Aqui esta ocutlo en input por el type hidden -->
    <input type="hidden" name="estatus" value="0">
    <button type="submit" class="btn btn-success">Enviar</button>

</form>