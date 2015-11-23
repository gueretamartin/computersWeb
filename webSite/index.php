<?php 
session_start();

function cerrar_sesion()
    {
        session_destroy();
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- Custom CSS for signIn-->

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="#">Bienvenidos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li>
                        <?php if(!isset($_SESSION['usuario'])) { ?>
                        <a href="signUp.html">Registrarse</a>
                        <?php } else {?>
                        <a class="navbar-brand"><?php echo "Bienvenido ".$_SESSION['usuario'];?></a>
                        <?php }; ?>
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
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <img class="img-circle img-responsive img-center" src="img/Contacto.jpg" alt="">

                <h2>¿Quienes Somos?</h2>
                <p>Somos un grupo de Ingeniería en Sistemas de la Universidad Tecnologica Nacional de la Facultad Regional Rosario (FRRO).</p>
                <p>Realizamos este proyecto a fines de poder sustentar nuestros estudios y comienzo de nuestra inserción laboral.</p>

               <!-- <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p> -->
            </div>
            <div class="col-sm-4">
               <!-- <h2>Contact Us</h2>
                <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>-->


    <!--Loggin-->   
                <form action="login.php" class="form-signin" method="POST">

                    <h2 class= "alinearh2"><strong>Ingrese al Sitio</strong></h2>
                    <br>
                    <label for="inputUser" class="sr-only">Usuario</label>
                    <input type="form" id="inputUser" name="user" class="form-control" placeholder="Usuario" required autofocus>
                    <br>
                    <label for="inputPassword" class="sr-only">Contraseña</label>
                    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Contraseña" required autofocus>
                    <br>  
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button><br>
                    <a href="">Olvidé mi contraseña</a><br>
                    <a href="signUp.html">Aún no estoy registrado</a>
                </form> 
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="img/ser_tec_1.jpg" alt="">
                <h2 class="alinearh2">Insumos Informáticos</h2>
                <p>Usted podrá hacer compra de diversos artículos informáticos, podrá obtener presupuestos, y contactarnos en caso de cualquier duda sobre la compra que desea realizar. </p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="img/ser_tec.jpg" alt="">
                <h2 class="alinearh2">Asistencia Técnica</h2>
                <p>Le ofrecemos diferentes propuestas de asistencia, entre las que incluimos, telefónica o e-mail, asistencia remota, in-situ e inmediata. Para hacer uso de cualquiera de estas, deberá ingresar al sitio y enviarnos un e-mail con el inconveniente, nosotros decidiremos la mejor forma para que usted solucione sus problemas.</p>
            </div>
            <div class="col-sm-4">
                <a name="contacto"></a>
                <img class="img-circle img-responsive img-center" src="img/ser_tec_3.jpg" alt="">
                <h2 class="alinearh2">Contacto</h2>
                 <address>
                    <br>Zeballos 1335
                    <br>Rosario, Santa Fe, Argentina
                    <br> Telefono: (341) 456-7890
                    <br>Email: estudiantesfrro@gmail.com
                 </address>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
        <p class="edit1"><i><b>Importante:</b> Para poder acceder a nuestros servicios de ventas y asistencia técnica deberá registrarse en el sitio </i></p>
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

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php session_destroy(); ?>
</body>

</html>