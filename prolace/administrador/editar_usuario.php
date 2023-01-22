<?php
require_once('../contactos/php/connect1.php');
mysql_select_db($database_desarrolloweb, $desarrolloweb);
?>
<?php
$insertSQL = sprintf("UPDATE `usuario` SET  `user`='%s', `password1`='%s', `email`='%s'WHERE id_usuario=%s",$_POST['user'],$_POST['password1'],$_POST['email'],$_POST['id_usuario']);
echo ($insertSQL);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
header('Location:../administrador/usuario_mostrar.php');
?>