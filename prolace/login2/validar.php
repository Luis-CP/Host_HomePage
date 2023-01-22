<?php
 

$conexion=mysqli_connect("localhost","root","","prolasaf");
$usuario=$_POST['id_aspirante'];
$consulta="SELECT *FROM  aspirante WHERE id_aspirante='$usuario'  ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
   
    echo"<script>alert('Aspirante ya registrado');</script>";
 
    echo"<script> window.location= 'index.php'</script>";
    

    
}else{
   
    if( isset( $_POST['condiciones'] ) ) {
    $hostname_desarrolloweb = "localhost";
    $database_desarrolloweb = "prolasaf";
    $username_desarrolloweb = "root";
    $password_desarrolloweb = "";
    $desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
    $insertSQL = sprintf("INSERT INTO    `aspirante`(`id_aspirante`, `nombre_aspi`, `apellido_aspi`, `ciudad`, `email_aspi`, `telefono_aspi`, `password1`, `hoja`) VALUES (%s,'%s','%s','%s','%s',%s,'%s','%s')",$_POST['id_aspirante'],$_POST['nombre_aspi'],$_POST['apellido_aspi'],$_POST['ciudad'],$_POST['email_aspi'],$_POST['telefono_aspi'],$_POST['password1'],$_POST['hoja']);
 
    mysql_select_db($database_desarrolloweb, $desarrolloweb);
    $Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
    echo"<script>alert('Aceptado terminos y condiciones datos guardados');</script>";
    echo"<script> window.location= '../index.html'</script>";

    }else{
        echo"<script>alert('No acepto terminos y condiciones datos no guardados');</script>";
 
        echo"<script> window.location= 'registro.php'</script>";
    }

}
mysqli_free_result($resultado);
mysqli_close($conexion);










?>









