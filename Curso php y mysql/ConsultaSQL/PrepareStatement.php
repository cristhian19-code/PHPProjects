<?php

	$conexion = new mysqli('localhost','root','','prueba_sql');

	if (!$conexion->connect_error) {
		$statement = $conexion->prepare('INSERT INTO cuentas (ID, Nombre, Correo) VALUES (?,?,?)');

		$statement->bin_param('sss',$id,$nombre,$correo);

		
	}



?>