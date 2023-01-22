<?php
require_once('../contactos/php/connect1.php');
mysql_select_db($database_desarrolloweb, $desarrolloweb);
?>
<?php
$insertSQL = sprintf("UPDATE `mensaje_usuario` SET  `nombre_mensaje`='%s', `asunto_mensaje`='%s', `fechaDepeticion`='%s'WHERE id_mensaje=%s",$_POST['nombre_mensaje'],$_POST['asunto_mensaje'],$_POST['fechaDepeticion'],$_POST['id_mensaje']);
echo ($insertSQL);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
header('Location:../administrador/mensaje_mostrar.php')
?>