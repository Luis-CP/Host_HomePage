<?php
include ("conexion.php");
$sql="SELECT ruta FROM `catalogo_producto`";
$res=mysqli_query($cn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Imagen</title>
</head>
<body>
<h1>Registro de producto</h1>
<form action="cargar.php" method="POST" enctype="multipart/form-data">
   <input type="text" name="nombre" placeholder="Ingrese el nombre del producto">
   <input type="text" name="tipo" placeholder="Ingrese el tipo del producto">
   <input type="text" name="descripccion" placeholder="Ingrese una del producto">
    <input type="file" name="img" ><br><br>
    <input type="submit" value="Aceptar">
</form>
<hr>
<?php
    $row = mysqli_fetch_array($res, MYSQLI_NUM);
    echo '<img src="'.$row[1].'" width="200px" height="200px">';
?>
</body>
</html>