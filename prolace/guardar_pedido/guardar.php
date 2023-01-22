<?php
session_start();
$usuario=$_POST['id'];
 

 
 
$conexion=mysqli_connect("localhost","root","","prolasef");
$consulta="SELECT *FROM  usuario WHERE id='$usuario'  ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){

   
    echo "El usuario ya existe".$usuario;
}else{


    echo "El usuario se a registrado";

    



}
mysqli_free_result($resultado);
mysqli_close($conexion);










