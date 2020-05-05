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
                            <li><a class="dropdown-item" href="<?php echo $helper->url("solicitud","solicitudesEncargado"); ?>&nom=pendiente">Reparaciones solicitadas</a></li>
                            <li><a class="dropdown-item" href="<?php echo $helper->url("reparacion","reparaciones"); ?>">Reparaciones Disponibles</a></li>
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
                            <li><a class="dropdown-item" href="<?php echo $helper->url("usuarios","cerrarSesion"); ?>">cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        
        <table class="table table-striped table-dark">
          <thead bgcolor= #E74C3C>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre Reparacion</th>
              <th scope="col">Valor</th>
            </tr>
          </thead>
          <tbody>
            <?php if(isset($allReparaciones) && count($allReparaciones)>=1) {?>        
                <?php foreach($allReparaciones as $reparaciones) {?>
                    <tr>
                  <td><?php echo $reparaciones->id_reparacion; ?></td>
                  <td><?php echo $reparaciones->nombre_repa; ?> </td>
                  <td><?php echo $reparaciones->valor_repa; ?></td>
                </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
        </table>
    </body>
</html>