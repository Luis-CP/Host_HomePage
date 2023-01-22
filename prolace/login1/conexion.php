 <?php
$host="localhost";
$usuario="root"
$clave1="";
$bd="prolasaf";
$conexion=mysqli_conect($host,$usuario;$clave1,$bd);
if($conexion){
    echo "Conectado correctamente";
}else{

    echo "No se puedo conectar"
}
?>SELECT   id_usuario, `tipoProducto_pedido`, `cantidad_pedido`, `fechaRealizacion_pedido`, `fechaEntrega_pedido`, `EstadoEntrega_pedido` FROM `usuario_pedidos` WHERE 1