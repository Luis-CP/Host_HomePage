<?php 
	include "datos/conexion.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Productos</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />
</head>
<body>
	<h1>Sube tus productos con imagenes a este servidor.</h1>
	<br/>
<form action="Acciones/guardar.php" method="post" enctype="multipart/form-data">
<table>
	<TR>
		<td><label>Nombre:</label></td>
		<td><label><input type="text" name="Nombre" /></label></td>
	</TR>
	<TR>
		<td><label>Precio:</label></td>
		<td><label><input type="text" name="Precio"/> $</label></td>
	</TR>
</table>
	<input type="file" name="foto" />
	<br/>
	<input type="submit" value="Upload"/>
	</form>
<table border="2px">
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Imagen</td>
		<td>Acciones</td>
	</tr>
	<?php
		include 'Datos/conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>
	<tr>
		<td><?php echo $f['idProducto'];?></td>
		<td><?php echo $f['Nombre'];?></td>
		<td><?php echo $f['Precio'];?></td>
		<td><?php echo "<img class=\"imagen\" src=\""."Imagenes/".$f['Imagen']."\"/>";?></td>
		<td><?php echo '<a href="Acciones/eliminar.php?eliminar='.$f['idProducto'].'">Eliminar producto</a>';?>
		<?php echo '<a href="editar.php?editar='.$f['idProducto'].'">Editar</a>';?></td>
	</tr>
	<?php
	}
	?>
	</table>	
</body>
</html>