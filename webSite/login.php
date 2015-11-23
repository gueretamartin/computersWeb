<html> 
<head> 
<title>Alta Usuario</title> 
</head>
<body>
<?php
include("conexion.inc"); 

$usuario = $_POST['user'];
$contrasena = md5($_POST['pass']);

$vSql = "SELECT usuarios.idUsuario, usuarios.usuario, usuarios.nombre, usuarios.apellido, usuarios.fechaNacimiento, usuarios.email, usuarios.contrasena 
	FROM usuarios WHERE usuarios.usuario = '$usuario' && usuarios.contrasena = '$contrasena'";
$vResultado = mysqli_query($link,$vSql) or die (mysqli_error());
if(mysqli_num_rows($vResultado)){
	session_start();
	$array=mysqli_fetch_array($vResultado);
	$_SESSION["usuario"]= $array["usuario"];
 	$_SESSION["apellido"]= $array["apellido"];
 	$_SESSION["nombre"]= $array["nombre"];
 	$_SESSION["fechaNacimiento"]= $array["fechaNacimiento"];
 	$_SESSION["email"]= $array["email"];
 	$_SESSION["contrasena"]= $array["contrasena"];
	header("Location: index.php?".SID);
} 
else {
	header("Location: error-login.html");
}

mysqli_close($link); 
?> 
</body> 
</html>