<?php
	$line = "";
	$mysqli = new mysqli('localhost','root','','prueba_sql');

	if($mysqli->connect_error){
		die();
	}else{
		$resultado = $mysqli->query("SELECT * FROM cuentas");

		if($resultado->num_rows){
			while ($obj = $resultado->fetch_object()) {
			    $line.="<tr><td>$obj->ID</td>";
			    $line.="<td>$obj->Nombre</td>";
			    $line.="<td>$obj->Correo</td></tr>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
		</tr>
		<tr>
			<?php echo $line ?>
		</tr>
	</table>

</body>
</html>
