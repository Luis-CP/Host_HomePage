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

$id_aspirante = $_POST['id_aspirante'];
$pass = $_POST['password1'];

$query = mysqli_query($conn,"SELECT * FROM aspirante WHERE id_aspirante = '".$id_aspirante ."' and password1 = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){

	 $_SESSION['id_aspirante']=$id_aspirante;
	  $_SESSION['password1']=$pass;


	 	header("Location:bienvenido.php");
	 	die();
	 
}
else if ($nr == 0) 
{
	 
	echo"<script>alert('Usuario y contraseña incorrecta vuelva a ingresar');</script>";
 
    echo"<script> window.location= 'index.php'</script>";
    
}
	


?>



