<?php
	$mysqli= new mysqli("localhost","u994449959_junta_admin16","Pechugas36.","u994449959_junta_Aguan");
	if(mysqli_connect_errno()){
		echo "<p>Este sitio esta presentando problemas</p>";
	}
	$mysqli->set_charset("utf8");
