<?php
$hostname_desarrolloweb = "localhost";
    $database_desarrolloweb = "prolasaf";
    $username_desarrolloweb = "root";
    $password_desarrolloweb = "";
    $desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
  
    $insertSQL = sprintf("INSERT INTO  `usuario_pedidos`(`id_usuario`, `tipoProducto_pedido`, `cantidad_pedido`, `fechaRealizacion_pedido`, `fechaEntrega_pedido`, `EstadoEntrega_pedido`) VALUES (%s,'%s',%s,'%s','%s','%s')",$_POST['id_usuario'],$_POST['tipoProducto_pedido'],$_POST['cantidad_pedido'],$_POST['fechaRealizacion_pedido'],$_POST['fechaEntrega_pedido'],$_POST['EstadoEntrega_pedido']);
    mysql_select_db($database_desarrolloweb, $desarrolloweb);
    $Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
    header('Location:../../login1/usuario/registar_pedido.php"');

?> 