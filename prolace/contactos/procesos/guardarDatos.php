<?php
	require_once "../php/connect.php";
	$nombre=$_POST['nombre_mensaje'];
	$apellido=$_POST['asunto_mensaje'];
	$email=$_POST['fechaDepeticion'];
 
	$query="INSERT INTO mensaje_usuario(nombre_mensaje,asunto_mensaje,fechaDepeticion) VALUES('$nombre','$apellido','$email')";
	if($mysqli->query($query)){
		echo"<script>alert('Mensaje  enviado  exitosamente');</script>";
		echo"<script> window.location= '../../contact.html'</script>";
		
	}else{
		echo"<script>alert('Datos incorrectos');</script>";
	}