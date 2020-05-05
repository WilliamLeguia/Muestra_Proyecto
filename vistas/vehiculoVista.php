<!DOCTYPE HTML>

<html lang="es">

    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo PHP MySQLi POO MVC</title>
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
        <?php if(isset($allvehiculos) && count($allvehiculos)>=1) {?>
        <div class="col-lg-7">
            <h3>Reparaciones</h3>
            <hr/>
        </div>
         <section class="col-lg-7 reparaciones" style="height:400px;overflow-y:scroll;">
            <?php foreach($allvehiculos as $vehiculo) {?>
                <?php echo $vehiculo->id_vehiculo; ?> -
                <?php echo $vehiculo->matricula; ?> -
                <?php echo $vehiculo->modelo; ?>
                <hr/>
            <?php } ?>
        </section>
<?php } ?>


        <form action="<?php echo $helper->url("vehiculo","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir vehiculo</h3>
            <hr/>
            Matricula: <input type="text" name="matricula" class="form-control"/>
            Modelo: <input type="text" name="modelo" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>

    </body>

</html>