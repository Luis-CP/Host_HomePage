<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscador</title>
</head>
<body>
	<form action="buscador.php" method="POST" autocomplete="off">
	<input class="form-control form-control-sm ml-3 w-75" type="text"  name="palabra" placeholder="Search" aria-label="Search">
	 
		<input type="submit" value="Buscar">
	</form>
	<?php
		if(isset($_POST['palabra'])){
			require_once "php/connect.php";
			require_once "procesos/buscar.php";
		}
	?>
</body>
</html>