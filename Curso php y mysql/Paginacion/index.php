<?php

	try {
		$conexion = new mysqli('localhost','root','','articulos');
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		die();
	}

	//obtener el numero de pagina por el metodo
	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	$postPorPagina = 5;

	$inicio = ($pagina>1) ? ($pagina-1)*($postPorPagina) : 0;

	//obteniendo 
	$articulos = $conexion->query("SELECT * FROM articulos LIMIT $inicio,$postPorPagina");

	//obteniendo todos los datos de la tabla articulos y su la cantidad
	$totalArticulos = $conexion->query("SELECT * FROM articulos");

	$totalArticulos = $totalArticulos->num_rows;

	//calculando el numero de paginas
	$numeroPaginas = ceil($totalArticulos/$postPorPagina);

	if(!$articulos){
		header('Location: http://localhost/Curso%20php%20y%20mysql/Paginacion/');
	}

	require 'index.view.php';

?>