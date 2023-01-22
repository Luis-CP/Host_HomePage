<?php
$hostname_desarrolloweb = "localhost";
$database_desarrolloweb = "prolasaf";
$username_desarrolloweb = "root";
$password_desarrolloweb = "";
$desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
$insertSQL = sprintf("UPDATE `postulacion_aspirante` SET  `id_aspirante`=%s, `cargo_postulacion`='%s', `lugar_postulacion`='%s', `aniosExperiencia_postulacion`='%s', `area_conocimiento`='%s', `estado_postulacion`='%s'WHERE id_postulacion=%s",$_POST['id_aspirante'],$_POST['cargo_postulacion'],$_POST['lugar_postulacion'],$_POST['aniosExperiencia_postulacion'],$_POST['area_conocimiento'],$_POST['estado_postulacion'],$_POST['id_postulacion']);
echo ($insertSQL);
mysql_select_db($database_desarrolloweb, $desarrolloweb);
$Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
header('Location:../administrador/postulante_mostrar.php')
?>