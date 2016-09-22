<?php
$username = $_POST["username"];
require("connection.php");
$sql = "SELECT username FROM users where username = '$username'" ;
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();
//Asigno 1 si existe el usuario
//Asigno 0 si no existe (el nombre de usuario está disponible)
if($row > 0 ){
  $respuesta['res'] = 1;
} else { $respuesta['res'] = 0;}

    mysqli_close($mysqli);
    echo json_encode($respuesta);
 ?>
