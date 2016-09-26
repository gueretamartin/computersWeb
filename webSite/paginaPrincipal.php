<?php
session_start();
require("connection.php");

if(!isset($_SESSION['id'])){
  header("location:index.php");
}
else{
$sql = "SELECT COUNT(*) 'cantidad' FROM productos";
$result=$mysqli->query($sql);
$cantidad = $result -> fetch_assoc();
$can = $cantidad['cantidad'] +1;


function mostrarElemento(){
  require("connection.php");
  $sql2 = "SELECT * FROM productos";
  $resultado = $mysqli->query($sql2);
while($fila = mysqli_fetch_assoc($resultado))
          {

  echo '<div class="row" style="margin:30px; text-align:center;">';
  echo '<h4>'.$fila['nombreProducto'].'</h4><br>';
  echo '<img src="testImagenes.php?idProducto='.$fila['idProducto'].'&tam=1 alt="Productos" style=" height: 200px;
            width: 200;" /><br>';
  echo $fila['descripcionProducto'].'<br>';
  echo '<h3> $'.$fila['precio'].'</h3>';
  echo '</div>';
          }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a Carlos VII</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jqueryindex.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Iconos -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="navbar-brand" href="paginaPrincipal.php">Bienvenidos</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a data-toggle="modal" data-target="#popUpContact">Contacto</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="logout.php" style="font-size:15px; font-familyVerdana;">Cerrar Sesión <i style="padding-left:5px;" class="fa fa-remove fa-2x"></i></a>
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

    <div class="container">
              <?php mostrarElemento();  ?>
              </div>
    </div>
  </body>
</html>
<?php }?>
