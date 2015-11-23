<html> 
<head> 
<title>Alta Usuario</title> 
</head>
<body>
<?php 
include("conexion.inc"); 

$usuario = $_POST['user'];
$nombre = $_POST['name']; 
$apellido = $_POST['surname']; 
$email = $_POST['email']; 
$nacimiento = $_POST['birth'];
$contrasena = md5($_POST['pass']);

$vSql = "SELECT idUsuario FROM usuarios WHERE email = '$email'";
$vResultado = mysqli_query($link,$vSql) or die (mysqli_error());
$vCantUsuarios = mysqli_num_rows($vResultado);
if ($vCantUsuarios != 0)
{ 
 	header("Location: error-signUp.html");
} 
else 
{ 
	$vSql = "INSERT INTO usuarios (idUsuario, usuario, nombre, apellido, fechaNacimiento, email, contrasena) 
	values (NULL,'$usuario', '$nombre', '$apellido', '$nacimiento', '$email', '$contrasena')"; 
	mysqli_query($link,$vSql) or die (mysqli_error());
	header("Location: successful-signUp.html");
	mysqli_free_result($vResultado); 
}

mysqli_close($link); 
?> 
</body> 
</html>