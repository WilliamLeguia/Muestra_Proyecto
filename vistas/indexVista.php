<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Taller </title>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="personalizable/css/mio.css">
        <link rel="icon" type="image/png" href="personalizable/img/ico_index.ico"/>

    </head>
    <body>
      <nav class="navbar navbar-dark bg-primary" style="height: 120px;">
            <center><img src="personalizable/img/tomatestaller.png" alt="" style="height: 140px;width: 100%"></center>
      </nav>
      <?php if(isset($_SESSION["usuario"])) : ?>
      <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="estekstk" hhref="<?php echo $helper->url("usuario","index"); ?>" class="navbar-brand">Taller Automotriz Kuruma</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Quienes Somos?<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Misión</a></li>
                            <li><a href="#">Visión</a></li>
                            <li><a href="#">¿A donde vamos?</a></li>
                            <li><a href="#">¿Por qué elegirmos?</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo $helper->url("solicitud","solicitudes"); ?>">Mis Solicitudes</a></li>
                    <li><a class="dropdown-item" href="<?php echo $helper->url("reparacion","index"); ?>">Listar Reparaciones</a></li>
                </ul>
              <?php if($_SESSION["rol"]==5) {?>
                <ul class="nav navbar-nav">
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $helper->url("reparacion","reparacionesEncargado"); ?>">Reparaciones solicitadas</a></li>
                            <li><a class="dropdown-item" href="<?php echo $helper->url("reparacion","reparaciones");?>">Reparaciones Disponibles</a></li>
                        </ul>
                    </li>
                  </ul>

            <?php } ?>

                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Eventos</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuenta <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Configuracion</a></li>
                            <li><a href="#">Ayuda</a></li>
                            <li><a class="dropdown-item" href="<?php echo $helper->url("usuarios","cerrarSesion"); ?>">Cerrar Sección</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <?php else : ?>

              <h3>iniciar <a href ="<?php echo $helper->url("iniciar","index"); ?>">session.</a></h3>
              <h3>Crear<a href ="<?php echo $helper->url("noLog","registro"); ?>">cuenta.</a></h3> 

            <?php endif; ?>
           <!-- 

        <?php if(isset($_SESSION["usuario"])) : ?>

            <nav class="navbar navbar-light bg-light justify-content-between">
                <div class="col-lg-5"><a class="navbar-brand"><h1>TALLER AUTOMOTRIZ</h1></a></div>
              
              <form class="form-inline">
                <div class="dropdown col-lg-7">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo $helper->url("solicitud","index"); ?>">Mis Solicitudes</a>
                <a class="dropdown-item" href="<?php echo $helper->url("reparacion","index"); ?>">Listar Reparaciones</a>
                <a class="dropdown-item" href="<?php echo $helper->url("usuarios","cerrarSesion"); ?>">cerrar sesion</a>
              </div>
            </div>
            <?php if($_SESSION["rol"]==5) {?>
              <div class="dropdown col-lg-7">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                opciones emcargado
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo $helper->url("reparacion","reparacionesEncargado"); ?>">Reparaciones solicitadas</a>
                <a class="dropdown-item" href="<?php echo $helper->url("reparacion","reparaciones"); ?>">Reparaciones Disponibles</a>
              </div>
            </div>

            <?php } ?>
              </form>
            </nav>

              <?php else : ?>

              <h3>iniciar <a href ="<?php echo $helper->url("iniciar","index"); ?>">session.</a></h3>
              <h3>Crear<a href ="<?php echo $helper->url("noLog","registro"); ?>">cuenta.</a></h3> 

            <?php endif; ?>
        -->
    </body>
</html>
