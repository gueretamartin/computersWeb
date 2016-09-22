<?php
require("connection.php");

if(!empty($_POST))
{
  $username = mysqli_real_escape_string($mysqli,$_POST['inputUser']);
  $name = mysqli_real_escape_string($mysqli,$_POST['inputName']);
  $surname = mysqli_real_escape_string($mysqli,$_POST['inputSurname']);
  $date = mysqli_real_escape_string($mysqli,$_POST['inputDate']);
  $mail = mysqli_real_escape_string($mysqli,$_POST['inputEmail']);
  $password = mysqli_real_escape_string($mysqli,$_POST['Password']);
  $sha1_pass = sha1($password);
  $tipoUser = 2 ;
  $error = '';

  // $sql = "INSERT INTO users VALUES ('$username','$sha1_pass','$tipoUser')";

  $sql = "SELECT max(id) 'idmax' from users";
  $result=$mysqli->query($sql);
	$row = $result->fetch_assoc();
  $maxid = $row['idmax'] + 1;
  echo $maxid;

       $sql2 = "INSERT INTO users (username,password,idTipoUsuario) VALUES ('$username','$sha1_pass','$tipoUser')";
       $sql3 = "INSERT INTO personas (nombrePersona,apellidoPersona,email,id,fechaNacimiento) VALUES ('$name','$surname','$mail','$maxid','$date')";
       $result1=$mysqli->query($sql2);
       $result=$mysqli->query($sql3);

       header("location: registroExitoso.html");
};
 ?>
