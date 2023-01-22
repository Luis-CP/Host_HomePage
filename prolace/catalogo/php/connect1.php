<?php
$hostname_desarrolloweb = "localhost";
$database_desarrolloweb = "prolasef";
$username_desarrolloweb = "root";
$password_desarrolloweb = "";
$desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
?>