<?php // Parámetros para recuperar la imagen
# Recuperamos el parámetro GET con el id único de la foto que queremos mostrar
$idProducto = (isset($_GET["idProducto"])) ? $_GET["idProducto"] : exit();
# Recuperamos el parámetro GET para elegir entre la miniatura o la foto real
$tam = (isset($_GET["tam"])) ? $_GET["tam"] : 1;
// Escojemos la foto real o la miniatura según la variable $tam
switch($tam) {
        case "1":
                $campo = "fotoProducto";break;;
        case "2":
                $campo = "thumbProducto";break;;
        default:
                $campo = "fotoProducto";break;;
              }
require("connection.php");
$sql = "SELECT $campo
                FROM productos
                WHERE idProducto = $idProducto";

$result=$mysqli->query($sql);
$row = $result->fetch_array();

// La imagen
$imagen = $row[0];

header("Content-Type: image/jpeg");
// Muestra la imagen
echo $imagen;

?>
