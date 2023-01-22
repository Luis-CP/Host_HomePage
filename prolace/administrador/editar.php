<?php
$hostname_desarrolloweb = "localhost";
$database_desarrolloweb = "prolasaf";
$username_desarrolloweb = "root";
$password_desarrolloweb = "";
$desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
$insertSQL = sprintf("UPDATE `usuario_pedidos` SET  `id_usuario`=%s, `tipoProducto_pedido`='%s', `cantidad_pedido`=%s, `fechaRealizacion_pedido`='%s', `fechaEntrega_pedido`='%s', `EstadoEntrega_pedido`='%s'WHERE id_pedidos=%s",$_POST['id_usuario'],$_POST['tipoProducto_pedido'],$_POST['cantidad_pedido'],$_POST['fechaRealizacion_pedido'],$_POST['fechaEntrega_pedido'],$_POST['EstadoEntrega_pedido'],$_POST['id_pedidos']);
echo ($insertSQL);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
 

if($Result1 = mysql_query($insertSQL, $desarrolloweb)){
    echo"<script>alert('Campos editados correctamente');</script>";
 
    echo"<script> window.location= 'buscar_pedidoModif.php'</script>";

}else{
    die(mysql_error());
}

?>