<?php
require('connection.php');
session_start();

if(isset($_SESSION["id"])){
  header("Location: exito-log.php");
}


if(!empty($_POST))
{
  $username = mysqli_real_escape_string($mysqli,$_POST['inputUsername']);
  $password = mysqli_real_escape_string($mysqli,$_POST['inputPassword']);
  $error = '';

  $sha1_pass = sha1($password);

  $sql = "SELECT id, username, idTipoUsuario from users where username = '$username' and password ='$sha1_pass'";
  $result=$mysqli->query($sql);
	$rows = $result->num_rows;

  if($rows > 0 ){
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['idTipoUsuario'] = $row['idTipoUsuario'];
    header("location: exito-log.php");
  } else {$error = "El nombre de usuario y/o contraseña son incorrectos";}
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carlos VII - Computadoras</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jqueryindex.js"></script>
     <script type="text/javascript" src="validacionNombreUsuario.js">

    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bienvenidos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a data-toggle="modal" data-target="#popUpContact">Contacto</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#popUpWindow">Registrarse</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Carlos VII - Computadoras </h1>
                   <!-- <h1 class="tagline2">The best place for you</h1> -->
                </div>
            </div>
        </div>

    </header>

    <!-- Page Content -->
    <div class="container">
      <!--Modal Contact-->
      <div class="modal fade" id="popUpContact">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="text-align:center;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2>Contacto</h2>
            </div>
            <div class="modal-body" style="text-align:center;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.8616263144054!2d-60.644326844054!3d-32.954662537900255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11d0eb49c3%3A0x11f1d3d54f950dd0!2sUTN%3A+Facultad+Regional+Rosario!5e0!3m2!1ses!2sar!4v1474554870557" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
               <address>
                  <br>Zeballos 1341
                  <br>Rosario, Santa Fe, Argentina
                  <br> Telefono: (341) 456-7890
                  <br>Email: estudiantesfrro@gmail.com
               </address>
            </div>
          </div>
        </div>
      </div>
        <!--Modal Terms -->
        <div class="modal fade" id="popUpTerms" style="z-index: 1600;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2><strong>Términos y Condiciones</strong></h2>
              </div>
              <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">Entendido</button>
              </div>
            </div>
          </div>
        </div>

        <!--Modal form -->
        <div class="modal fade" id="popUpWindow" style="z-index: 1400;">
          <div class="modal-dialog">
            <div class="modal-content">
              <!--header-->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2><strong>Complete con sus datos:</strong></h2>
              </div>
              <!--body form-->
              <div class="modal-body">
                <form  class="form-signup" method="POST" action="altaUsuario.php">

                    <label for="inputUser" class="sr-only">Usuario</label>
                    <input type="text"  id="inputUser" name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
                    <p id="mensajeDisponibilidad"></p>

                    <label for="inputName" class="sr-only">Nombre</label>
                    <input type="text" id="inputName" name="inputName"  class="form-control" placeholder="Nombre" required autofocus>

                    <label for="inputApellido" class="sr-only">Apellido</label>
                    <input type="text" id="inputSurname" name="inputSurname" class="form-control" placeholder="Apellido" required autofocus>

                    <label for="inputFecha">Fecha de Nacimiento</label>
                    <input type="date" id="inputDate" name="inputDate" class="form-control" placeholder="Fecha de Nacimiento" required autofocus>

                    <label for="inputEmail" class="sr-only">E-mail</label>
                    <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus>

                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input type="password" id="Password" name="Password" class="form-control" placeholder="Contraseña" required autofocus >

                    <a data-toggle="modal" data-target="#popUpTerms"><br/>Leer los términos y condiciones</a>
                      <!-- Add checkbox-->
                   <div class="checkbox">
                      <label><input  type="checkbox" value="agree" required> Estoy de acuerdo con los términos y condiciones</label>


              </div>
              <!--button-->
              <div class="modal-footer">
                <button id="enviaform" class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                <br>
                </form>
                <u><a href="index.php">No, Ya estoy registrado.</a></u>
              </div>
              </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-8">
                <img class="img-circle img-responsive img-center" src="img/Contacto.jpg" alt="">
                <div class="panel panel-info">
                  <div class="panel-heading">
                      <h2>¿Quienes Somos?</h2>
                  </div>
                  <div class="panel-body">
                    <p>Somos un grupo de Ingeniería en Sistemas de la Universidad Tecnologica Nacional
                    de la Facultad Regional Rosario (FRRO).
                    Realizamos este proyecto a fines de poder sustentar nuestros estudios y comienzo de
                    nuestra inserción laboral.</p>
                  </div>
                </div>

            </div>

              <div class="col-sm-4">
              <!--Loggin-->
              <div class="panel panel-success">
                  <div class="panel-heading" style="text-align:center;">
                    <h2>Ingrese al Sitio</h2>
                  </div>
                  <div class="panel-body">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                    <label for="inputUser" class="sr-only">Usuario</label>
                    <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Usuario" required autofocus>

                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required autofocus>

                    <button id="enviarformulario" class="btn btn-lg btn-success btn-block" type="submit">Enviar</button><br>
                    <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? $error : '' ; ?></div>
                    <p id="mensajeIncorrecto"></p>
                    <a href="">Olvidé mi contraseña</a><br>
                    <a data-toggle="modal" data-target="#popUpWindow">Aún no estoy registrado</a>
                  </form>
                  </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <div class="row text-center">
        <input id="display" class="btn btn-info" style="width:400px;height:50px;font-size:30px;font-family:Helvetica;" type="button" name="name" value=" NUESTROS SERVICIOS">
        </div>

        <div class="row" style="margin:20px;">
            <div class="col-sm-6 ">
                <div class="panel panel-primary imagen">
                    <div class="panel-heading">
                      <h2 class="alinearh2">Insumos Informáticos</h2>
                    </div>
                    <div class="panel-body">
                      <img style="margin-bottom:20px;" class="img-circle img-responsive img-center imagen" src="img/ser_tec_1.jpg" alt="">
                      <p style="font-family:Verdana;font-size:17px;">Usted podrá hacer compra de diversos artículos informáticos, podrá obtener presupuestos, y contactarnos en caso de cualquier duda sobre la compra que desea realizar. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="panel panel-primary imagen">
                    <div class="panel-heading">
                      <h2 class="alinearh2">Asistencia Técnica</h2>
                    </div>
                    <div class="panel-body">
                      <img style="margin-bottom:20px;" class="img-circle img-responsive img-center imagen" src="img/ser_tec.jpg" alt="">
                      <p style="font-family:Verdana;font-size:17px;">Le ofrecemos diferentes propuestas de asistencia, entre las que incluimos, telefónica o e-mail, asistencia remota, in-situ e inmediata. Para hacer uso de cualquiera de estas, deberá ingresar al sitio y enviarnos un e-mail con el inconveniente, nosotros decidiremos la mejor forma para que usted solucione sus problemas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
        <p class="edit1" id="message"><i><b>Importante:</b> Para poder acceder a nuestros servicios de ventas y asistencia técnica deberá registrarse en el sitio </i></p>
        </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <b>Estudiantes de Ingeniería en Sistemas - FRRO</b></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
        <!-- /.Footer -->

    </div>
    <!-- /.container -->


</body>

</html>
