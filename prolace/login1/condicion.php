<?php
session_start();
$nombre=$_SESSION['usuario'];
$password1=$_SESSION['password1'];
if(isset($_SESSION['id_usuario']  && $_SESSION['password1'] )){
 header('location:"../login1/bienvenido.php');


}else{

	echo'Inicie sesion tonto';
}

?>