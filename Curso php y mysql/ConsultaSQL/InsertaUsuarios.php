<?php
	$line = "";
	$mysqli = new mysqli('localhost','root','','prueba_sql');
	
	if($mysqli->connect_error){
		die();
	}else{
		$mysqli->query("INSERT INTO cuentas(ID,Nombre,Correo) VALUES (null,'Ricardo Aponte','ricardo@gmail.com')");

		if($mysqli->affected_rows >= 1){
			echo 'Se inserto corectamente'.$mysqli->affected_rows;
		}
	}
?>
