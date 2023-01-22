<?php
$hostname_desarrolloweb = "localhost";
$database_desarrolloweb = "prolasaf";
$username_desarrolloweb = "root";
$password_desarrolloweb = "";
$desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
$insertSQL = sprintf("UPDATE `catalogo_producto` SET  `nombre_producto`=%s, `tipo_producto`='%s', `descripcion_producto`='%s', `nombre_imagen`='%s', `ruta`='%s'WHERE id_catalogo=%s",$_POST['nombre_producto'],$_POST['tipo_producto'],$_POST['descripcion_producto'],$_POST['nombre_imagen'],$_POST['ruta'],$_POST['id_catalogo']);
echo ($insertSQL);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
header('Location:../administrador/producto_mostrar.php')
?>