<?php
$hostname_desarrolloweb = "localhost";
$database_desarrolloweb = "prolasaf";
$username_desarrolloweb = "root";
$password_desarrolloweb = "";
$desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
 
$insertSQL = sprintf("DELETE FROM `catalogo_producto` WHERE id_catalogo=%s",$_GET['id']);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());


echo'<script type="text/javascript">
    alert("Pedido eliminado");
    window.location.href="buscar_pedidoEli.php";
    </script>';
?>