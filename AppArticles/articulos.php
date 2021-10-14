<?php 
	session_start();

	if(!empty($_SESSION['user']['id'])){

		//ver si el dato de role es administrador para poder dar algunos accesos
		require './controller/conection.php';
	
		$conection = Conection('articulos','root','');

		$statement = $conection->prepare('SELECT * FROM articulos;');

		$statement->execute();

		require './views/articulos.view.php';
		die();
	}

	header('Location: index.php');
?>

