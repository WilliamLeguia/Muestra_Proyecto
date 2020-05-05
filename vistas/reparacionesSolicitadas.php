<!DOCTYPE HTML>

<html lang="es">

    <head>
        <meta charset="utf-8"/>
        <title>Taller</title>
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
        <div class="container">
          <h3>Tabs</h3>
          <ul class="nav nav-tabs">
            <li class="<?php if ($estado=="pendiente") { echo "active"; } ?>"><a href="<?php echo $helper->url("solicitud","solicitudesEncargado"); ?>&nom=pendiente">Pendientes</a></li>
            <li class="<?php if ($estado=="aprovado") { echo "active"; } ?>"><a href="<?php echo $helper->url("solicitud","solicitudesEncargado"); ?>&nom=aprovado">Aprovados</a></li>
            <li class="<?php if ($estado=="denegado") { echo "active"; } ?>"><a href="<?php echo $helper->url("solicitud","solicitudesEncargado"); ?>&nom=denegado">Denegados</a></li>
          </ul>
          <br>
          <?php if($allcliente_solicitud && count($allcliente_solicitud)>=1) {?>
         <section class="col-lg-7 reparaciones" style="height:400px;overflow-y:scroll;">


            <?php foreach($allcliente_solicitud as $cliente_solicitud) {?>
                <?php echo $cliente_solicitud->nombreUsuario; ?> 
                <?php echo $cliente_solicitud->fecha; ?> -
                <?php echo $cliente_solicitud->nombreMarca; ?> -
                <?php echo $cliente_solicitud->total; ?> -
                <?php echo $cliente_solicitud->motivo; ?> -
                <?php if ($estado == "pendiente") { ?>
                    <a href ="<?php echo $helper->url("solicitud","updateAprovar"); ?>&nom=<?php echo $cliente_solicitud->id_solicitud ?> ">aprovar</a>
                    <a href ="<?php echo $helper->url("solicitud","updateDenegar"); ?>&nom=<?php echo $cliente_solicitud->id_solicitud ?> ">denegar</a>
                <?php }  ?>
                
                <hr/>
            <?php } ?>
        </section>
        <?php } ?>
        </div>



<!--

        <h3><a href ="<?php echo $helper->url("noLog","index"); ?>&id=index">Taller Automotriz</a></h3>
        <a href="<?php echo $helper->url("usuarios","cerrarSesion"); ?>">cerrar sesion</a>
        <?php if(isset($allReparaciones) && count($allReparaciones)>=1) {?>
        <div class="col-lg-7">
            <h3>Reparaciones</h3>
            <hr/>
        </div>
         <section class="col-lg-7 reparaciones" style="height:400px;overflow-y:scroll;">
            <?php foreach($allReparaciones as $reparaciones) {?>
                <?php echo $reparaciones->id_reparacion; ?> -
                <?php echo $reparaciones->nombre_repa; ?> -
                <?php echo $reparaciones->valor_repa; ?>
                <hr/>
            <?php } ?>
        </section>
        <?php } ?>
-->
    </body>

</html>