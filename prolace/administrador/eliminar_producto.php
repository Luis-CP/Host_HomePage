<?php
	include 'crud_catalogo/Datos/conexion.php';
	$id= $_GET['eliminar'];
	$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	$re = mysql_query("select imagen_producto from catalogo_producto where id_catalogo=".$id.";");
	while ($imagen=mysql_fetch_array($re)) {
		$espera = unlink("../Imagenes/".$imagen['image_producto']);
	}
	mysql_query("delete from catalogo_producto where id_catalogo =".$id.";");
	echo "<script>
       alert(' Se ha elimando el  producto al catalogo satisfactoriamente ')
	 </script>";
		 echo "<script> document.location.href='producto_mostrar.php';</script>";  
?>