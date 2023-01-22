<?php
require_once('../php/connect1.php');
mysql_select_db($database_desarrolloweb, $desarrolloweb);
?>
<?php
$insertSQL = sprintf("DELETE FROM `mensaje_usuario` WHERE id_mensaje=%s",$_GET['id']);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());

?>