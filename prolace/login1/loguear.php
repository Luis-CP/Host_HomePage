<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prolasaf";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST['id_usuario'];
$pass = $_POST['password1'];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE id_usuario = '".$nombre."' and password1 = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){

	 $_SESSION['usuario']=$nombre;
	  $_SESSION['password']=$pass;


	 	header("Location:usuario/panel_control.php");
	 	die();
	 
}
else if ($nr == 0) 
{
	 
	echo"<script>alert('Usuario y contraseña incorrecta  vuelva ha ingresar');</script>";
 
       echo"<script> window.location= 'index.php'</script>";
}
	


?>



