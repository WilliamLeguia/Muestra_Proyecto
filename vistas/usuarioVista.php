<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="personalizable/css/bootstrap.min.css">
    <link rel="stylesheet" href="personalizable/css/style_login.css">
    <link rel="icon" type="image/png" href="personalizable/img/ico_index.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Taller Automotriz</title>
  </head>
  <body class="">
      
        <nav class="navbar navbar-dark bg-primary" style="height: 140px;">
            <center><img src="personalizable/img/tomates.png" alt="" style="height: 200px;width: 100%"></center>
        </nav>

    <section id="login">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <div class="form-wrap " style="width: 250px;)">

              <img class="img_login" src="personalizable/img/logo.png" style="height: 200px;width: 200px;" alt="">
              
              <form role="form" action="<?php echo $helper->url("iniciar","sesion");?>" method= "post" >
                <div class="form-group">
                  <label for="codigo" class="sr-only">Código</label>
                  <input type="text" name ="correo"  class="form-control" placeholder="Usuario" required="" >
                </div>
                <div class="form-group">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name ="contrasena"  class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" name="button" class="btn btn-success">Iniciar sesión</button>
              </form>
              <br>
              <br>
              <!--<a href="views/registrar.php">Registrarte</a>-->

            </div>
          </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </section>

    <!-- Modal -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="personalizable/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="personalizable/js/bootstrap.min.js"></script>
    <script src="personalizable/js/funcionlogin.js"></script>
      
  </body>
</html>

<!--<!DOCTYPE HTML>
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
      <h3><a href ="<?php echo $helper->url("noLog","index"); ?>&id=index">Taller Automotriz</a></h3>
      <h5>Usuario y contraseña</h5>     
      
      
         <form action="<?php echo $helper->url("iniciar","sesion");?>" method= "post" class="col-lg-5">
            <hr/>
           correo:  <input type = "text" class="form-control" name ="correo" /></br>
           contrasena: <input type = "password" class = "form-control" name ="contrasena"/>
            <button type = "submit" name = "login"/>Login</button>
         </form>
			
         Click here to clean <a href ="<?php echo $helper->url("vehiculo","index"); ?>">Session.       
     
      
   </body>
</html>
-->