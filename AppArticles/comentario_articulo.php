<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	date_default_timezone_set('America/Caracas');
	setlocale(LC_ALL, 'Spanish_Peru');

	//variables
	$id_articulo = $_POST['id_articulo'];
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
	$id_usuario = $_SESSION['user']['id'];
	$date = date('Y-m-d');
	$hour = date('H:i:s');

	require './controller/conection.php';
	$conection = Conection('articulos', 'root', '');

	//obteniendo todos los datos del usuario 
	$statement = $conection->prepare('SELECT * FROM usuarios WHERE id = :id;');
	$statement->execute(array(':id' => $id_usuario));

	//almacenando en una variable
	$usuario = $statement->fetch();

	//insertando el comentario en la BD
	$statement = $conection->prepare("INSERT INTO comentarios (id, id_articulo, id_usuario, nombre, comentario, url, fecha, hora) VALUES (:id, :id_articulo, :id_usuario, :nombre, :comentario, :url, :fecha, :hora)");
	$statement->execute(array(':id' => null, ':id_articulo' => $id_articulo, ':id_usuario' => $id_usuario, ':nombre' => $usuario['nombre'], ':comentario' => $comment, ':url' => null, ':fecha' => $date, ':hora' => $hour));

	header("Location: http://localhost/AppArticles/articulo.php?id=$id_articulo");
} else {
	header('Location: articulos.php');
}
