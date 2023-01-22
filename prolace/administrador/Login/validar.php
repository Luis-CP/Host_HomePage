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

$nombre = $_POST['id'];
$pass = $_POST['password1'];

$query = mysqli_query($conn,"SELECT * FROM admin WHERE id = '".$nombre."' and password1 = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){

	 
	$_SESSION['id']=$nombre;
 


	 	header("Location:../Panel_control.php");
	 
}
else if ($nr == 0) 
{
	 
	echo"<script>alert('Administrador  y contraseña  incorrecta');</script>";
 
    echo"<script> window.location= '../../index.html'</script>";
     
}
	


?>





