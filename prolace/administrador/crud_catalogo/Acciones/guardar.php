<?php
include '../Datos/conexion.php';
$ruta = "../Imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['imagen_producto']['name'];
copy($_FILES['imagen_producto']['tmp_name'],$destino);
$nombre=$_FILES['imagen_producto']['name'];
$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("insert into catalogo_producto(id_catalogo,nombre_producto,tipo_producto,descripcion_producto,imagen_producto)values('$_POST[id_catalogo]','$_POST[nombre_producto]','$_POST[descripcion_producto]','$_POST[tipo_producto]','$nombre')",$con);
	echo "<script>
       alert(' Se ha añadido el  producto al catalogo satisfactoriamente ')
	 </script>";
	  
	 	 echo "<script> document.location.href='../../producto_mostrar.php';</script>";  

?>
