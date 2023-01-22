<?php
    include 'crud_catalogo/Datos/conexion.php';
    $con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
    mysql_select_db($db,$con)or die("no existe la base de datos");
    if ($_FILES['foto']['name']=="") {
        mysql_query("update catalogo_producto set nombre_producto ='".$_POST['nombre_producto']."', tipo_producto='".$_POST['tipo_producto']." , descripcion_producto='".$_POST['descripcion_producto']." ' where id_catalogo=".$_POST['id_catalogo'].";");
        echo "vacio";
    }
    else{
        $re = mysql_query("select imagen_producto from catalogo_producto where".$_POST['id_catalogo'].";");
        while ($f=mysql_fetch_array($re)) {
            unlink("../Imagenes/".$f['imagen_producto']);
        }
        $ruta = "crud_catalogo/Imagenes/";
        opendir($ruta);
        $destino = $ruta.$_FILES['foto']['name'];
        copy($_FILES['foto']['tmp_name'],$destino);
        $nombre=$_FILES['foto']['name'];
        mysql_query("update catalogo_producto set nombre_producto ='".$_POST['nombre_producto']."', tipo_producto='".$_POST['tipo_producto']."' , descripcion_producto='".$_POST['descripcion_producto']."',imagen_producto ='".$nombre."' where id_catalogo=".$_POST['id_catalogo'].";");
    }
    
    header("Location:producto_mostrar.php");
?>