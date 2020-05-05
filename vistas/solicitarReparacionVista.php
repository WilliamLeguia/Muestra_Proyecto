<!DOCTYPE HTML>

<html lang="es">

    <head>
        <meta charset="utf-8"/>
        <title>Taller</title>

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                <a style="font-size: 20px" class="estekstk" href ="<?php echo $helper->url("noLog","index"); ?>&id=index">Taller Automotriz Kuruma</a>
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $helper->url("solicitud","index"); ?>">Mis Solicitudes</a></li>
                            <li><a href="#">Solicitudes realizadas</a></li>
                            <li><a href="<?php echo $helper->url("solicitud","nuevaSolicitud"); ?>">Solicitar reparacion</a></li>
                        </ul>
                    </li>
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


<!--probando funcionalidades 
        <form action="<?php echo $helper->url("solicitud","escribir");?>" method="post">
<select name="Color">
<option value="este">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
-->

        
        <form action="<?php echo $helper->url("solicitud","marcas");?>" method= "post" class="col-lg-5">
            <div>
                <h5>
                    marca del auto
                </h5>
                <select class="selectpicker" name="marca">
                    <?php foreach($allMarcas as $marcas) {?>
                        <option value="<?php echo $marcas->id_marca; ?>">
                            <?php echo $marcas->nombre; ?>
                        </option>
                        
                        <hr/>
                    <?php } ?>
                    <input type="submit" name="submit" value="seleccionar" />
                </select>
            </div>
        </form>

        <!--Formulario para el solicitar una reparacion-->
        <form action="<?php echo $helper->url("solicitud","crear");?>" method= "post" class="col-lg-5">


            <div>
                <select name="reparacion[]" multiple> // Initializing Name With An Array
                    <?php foreach($porMarca as $reparaciones) {?>
                        <option value="<?php echo $reparaciones->id_reparacion; ?>">
                            <?php echo $reparaciones->id_reparacion; ?> -
                            <?php echo $reparaciones->nombre_repa; ?> -
                            <?php echo $reparaciones->valor_repa; ?>
                        </option>
                        
                        <hr/>
                    <?php } ?>
                </select>
            </div>

            <div>
                <h5>
                Dias disponibles para reparacion
            </h5>            
                <input id="date" type="date" name="dateFrom">
            </div>
            <div>
                Descripcion de la reparacion: <input type = "text" class = "form-control" name ="motivo"/>
            </div>
            <button type = "submit" name = "solicitar"/>Solicitar</button>
        </form>
        <!--fin del formulario-->

        

    </body>

</html>