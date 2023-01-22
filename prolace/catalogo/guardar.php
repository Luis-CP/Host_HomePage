<?php
	require_once "php/connect.php";
	$nombre=$_POST['nombre_producto'];
	$ubicacion=$_POST['ubicacion_producto'];
    $tipo=$_POST['tipo_producto'];
    $descripcion=$_POST['descripcion_producto'];
 
	$query="INSERT INTO catalogo_producto(nombre_producto,ubicacion_producto,tipo_producto,descripcion_producto) VALUES('$nombre','$ubicacion',' $tipo',' $descripcion')";
	if($mysqli->query($query)){
        header('Location:../administrador/catalogo_mostrar.php');
     
        echo "Datos guardados";
        
	}else{
        echo "Ocurrio un error";
    }
?>