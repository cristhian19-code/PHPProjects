<?php
session_start();

if (!empty($_SESSION['user']['id'])) {
	//ver si el dato de role es administrador para poder dar algunos accesos
	if ($_SESSION['user']['role'] == 'administrador') {
		date_default_timezone_set('America/Caracas');
		setlocale(LC_ALL, 'Spanish_Peru');

		require './controller/conection.php';

		//haciendo la conexion con la DB
		$conection = Conection('articulos', 'root', '');

		//comprobando si no hay error
		if (!$conection) {
			echo 'Error de conexion';
			die();
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($_FILES)) {
			if (!empty($_POST['title']) and !empty($_POST['description'])) {
				//obtenet los valores del form

				$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
				$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
				//obteniendo la fecha y hora
				$date = date('Y-m-d');
				$hour = date('H:i:s');

				//obteniendo datos de la imagen
				$check =  @getimagesize($_FILES['image']['tmp_name']);

				if ($check !== false) {

					//generando una url para la imagen
					$origen = 'fotos/';

					$url = $origen . $_FILES['image']['name'];

					//insertando todos los datos a la BD
					$statenent = $conection->prepare("INSERT INTO articulos (id,title,description,date,hour,url) VALUES ( :id , :title, :description, :date, :hour, :url)");

					$statenent->execute(array(':id' => null, ':title' => $title, ':description' => $description, ':date' => $date, ':hour' => $hour, ':url' => $url));

					//moviendo el archivo seleccionado a la carpeta fotos
					move_uploaded_file($_FILES['image']['tmp_name'], $url);
				}
			}
		}

		require './views/agregando_articulos.view.php';
		die();
	} else {
		header('Location: index.php');
	}
}
header('Location: index.php');
