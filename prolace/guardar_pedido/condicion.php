<?php
session_start();
if(isset($_SESSION['id_usuario']  && $_SESSION['password1'] )){
 header('location:"../login1/bienvenido.php")

}else{

	echo'Inicie sesion tonto';
}

?>