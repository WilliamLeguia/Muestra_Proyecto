<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Taller </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        

        <form action="<?php echo $helper->url("noLog","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir usuario</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" class="form-control"/>
            edad: <input type="number" name="edad" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
 <!--        
        <div class="col-lg-7">
            <h3>Usuarios</h3> 
            <?php if(isset($_SESSION["usuario"])) : ?>
              <h3>cerrar <a href ="<?php echo $helper->url("iniciar","cerrarSesion"); ?>">session.</a></h3>
              <?php else : ?>
              <h3>iniciar <a href ="<?php echo $helper->url("iniciar","index"); ?>">session.</a></h3>              
            <?php endif; ?>
            <hr/>
        </div>/

        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->edad; ?>
                <?php echo $user->foranea_tipo; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
-->    
    </body>
</html>