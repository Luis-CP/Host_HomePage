<?php
session_start();
 
echo "Bienvenidos";
$id_aspirante1=$_SESSION['id_aspirante'];
 

$conexion=mysqli_connect("localhost","root","","prolasaf");
$consulta="SELECT *FROM  postulacion_aspirante WHERE id_aspirante='$id_aspirante1'  ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){

    echo"<script>alert('Postulacion no exitosa');</script>";
 
    echo"<script> window.location= 'bienvenido.php'</script>";
}else{
    if( isset( $_POST['condiciones'] ) ) {
 $hostname_desarrolloweb = "localhost";
 $database_desarrolloweb = "prolasaf";
 $username_desarrolloweb = "root";
 $password_desarrolloweb = "";
 $desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
 $insertSQL = sprintf("INSERT INTO `postulacion_aspirante`( `id_aspirante`, `cargo_postulacion`, `lugar_postulacion`, `aniosExperiencia_postulacion`, `area_conocimiento`, `estado_postulacion`) VALUES (%s,'%s','%s',%s,'%s','%s')",$_POST['id_aspirante'],$_POST['cargo_postulacion'],$_POST['lugar_postulacion'],$_POST['aniosExperiencia_postulacion'],$_POST['area_conocimiento'],$_POST['estado_postulacion']);
  
 mysql_select_db($database_desarrolloweb, $desarrolloweb);
 $Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
 echo"<script>alert('El postulacion exitosa exito');</script>";
 
    echo"<script> window.location= 'bienvenido.php'</script>";

    }else{

        echo"<script>alert('No acepto terminos y condiciones datos no guardados');</script>";
 
        echo"<script> window.location= 'bienvenido.php'</script>";
    }    

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>