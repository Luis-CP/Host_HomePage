<?php
include ("conexion.php");
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripccion'];
if(isset($_FILES['img'])){
    $nombreImg=$_FILES['img']['name'];
    $ruta=$_FILES['img']['tmp_name'];
    $destino="imagenes/".$nombreImg;
   
    if(copy($ruta,$destino)){
        $sql="INSERT INTO catalogo_producto(nombre_producto,tipo_producto,descripcion_producto,nombre_imagen,ruta) VALUES ('$nombre','$tipo','$descripcion','$nombreImg','$destino')";
        $res=mysqli_query($cn,$sql);
        if($res){
            echo '<script type="text/javascript"> alert("Se ha añadido un catalogo al producto"); window.location="catalogo_guardar.php";</script>';

        }else{
            echo '<script type="text/javascript">   window.location="producto_registrar.php";</script>';
        }

    }else{
        echo '<script type="text/javascript">   window.location="producto_registrar.php";</script>';
    }
   
}
?>



