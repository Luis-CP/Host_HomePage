<?php
 

$conexion=mysqli_connect("localhost","root","","prolasaf");
$usuario=$_POST['id'];
$consulta="SELECT *FROM  usuario WHERE id='$usuario'  ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    header('Location:../login1/registro_usuario.php');
   
    die();
}else{
   
    if( isset( $_POST['condiciones'] ) ) {
    $hostname_desarrolloweb = "localhost";
    $database_desarrolloweb = "prolasaf";
    $username_desarrolloweb = "root";
    $password_desarrolloweb = "";
    $desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
    $insertSQL = sprintf("INSERT INTO `usuario`(`id_usuario`, `user`, `password1`,`email` ) VALUES (%s,'%s',%s,'%s')",$_POST['id'],$_POST['user'],$_POST['password1'],$_POST['email']);
    mysql_select_db($database_desarrolloweb, $desarrolloweb);
    $Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
    header('Location:../login1/usuario_registrado.php');
}else{
    echo"<script>alert('No acepto terminos y condiciones datos no guardados');</script>";

    echo"<script> window.location= 'registro_usuario.php'</script>";
}

}
mysqli_free_result($resultado);
mysqli_close($conexion);










?>









