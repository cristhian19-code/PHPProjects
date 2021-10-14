<?php 
	session_start();

	if(!empty($_SESSION['user']['id'])){
		if(isset($_GET['id'])){
			require './controller/conection.php';
			$id = $_GET['id'];
			$conection = Conection('articulos','root','');

			$statement = $conection->prepare('SELECT * FROM articulos WHERE id = :id');
			$statement->execute(array(':id' => $id));

			$result = $statement->fetch();
			
			if($result){
				//buscando los comentarios en ls BD con el id del articulo
				$statement_comment = $conection->prepare('SELECT * FROM comentarios WHERE id_articulo = :id_articulo');
				$statement_comment->execute(array(':id_articulo' => $id));

				require './views/articulo.view.php';
			}else{
				header('Location: articulos.php');
			}
		}else{
			header('Location: articulos.8php');
		}
	}else{
		header('Location: index.php');
	}
?>