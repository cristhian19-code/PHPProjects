<?php
	session_start();

	if(!empty($_SESSION['user']['id'])){
	//ver si el dato de role es administrador para poder dar algunos accesos
		if($_SESSION['user']['role'] == 'administrador'){
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				if(!empty($_GET['id'])){
					$id = $_GET['id'];

					//obteniendo la conexion con la BD
					require './controller/conection.php';
					$conection = Conection('articulos','root',''); 

					$statement = $conection->prepare('SELECT * FROM articulos WHERE id = :id LIMIT 1;');

					$statement->execute(array(':id'=>$id));

					$result = $statement->fetch();

					//verificando si hay resultados
					if($result){
						require './views/editar.view.php';
						die();
					}else{
						header('Location: articulos.php');
					}
				}else{
					header('Location: articulos.php');
				}
			}

			elseif ($_SERVER['REQUEST_METHOD'] == 'POST' and !isset($_FILES)) {

				if(!empty($_POST['title']) and !empty($_POST['description'])){

					require './controller/conection.php';

					//haciendo la conexion con la DB
					$conection = Conection('articulos','root','');

					//obtenet los valores del form
					$id = $_POST['id'];
					$title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
					$description = filter_var($_POST['description'],FILTER_SANITIZE_STRING);

					//obteniendo datos de la imagen
					$check =  @getimagesize($_FILES['image']['tmp_name']);

					if($check !== false){

						//generando una url para la imagen
						$origen = 'fotos/';

						$url = $origen.$_FILES['image']['name'];

						//actualizando los datos del articulo seleccionado
						$statenent = $conection->prepare("UPDATE articulos SET title = :title, description = :description, url = :url WHERE id=:id");

						$statenent->execute(array(':title'=>$title,':description'=>$description, ':url'=>$url, ':id'=>$id ));

						//moviendo el archivo seleccionado a la carpeta fotos
						move_uploaded_file($_FILES['image']['tmp_name'], $url);

						header('Location: articulos.php');
						die();
					}
				}
			}
			else{
				header('Location: articulos.php');
			}

		}else{
			header('Location: index.php');
		}
	}else{
		header('Location: index.php');
	}
	
?>