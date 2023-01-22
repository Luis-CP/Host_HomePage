<?php
	$palabra=$_POST['palabra'];
	$query="SELECT * FROM mensaje_usuario WHERE id_mensaje LIKE '%$palabra%'";
	$consulta3=$mysqli->query($query);
	if($consulta3->num_rows>=1){
		echo "<table>
		<thead>
			<tr>
				<th>id</th>
				<th>id mensaje</th>
				<th>Asunto</th>
				<th>Fecha</th>
		 
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>
				<td>".$fila['id_mensaje']."</td>
				<td>".$fila['asunto_mensaje']."</td>
				<td>".$fila['fechaDepeticion']."</td>
			 
			 
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}