<?php 

	session_start();
	
	if(isset($_SESSION['usuario'])){
		$conexion = new mysqli('localhost','root','','prueba_sql');

		$collection = array();

		if(!$conexion->connect_error){
			$sql = "SELECT * FROM tienda;";

			$resultado = $conexion->query($sql);

		}else{
			die();
		}

		require './views/productos.view.php';
	}else{
		header('Location: login.php');
	}
	
?>

