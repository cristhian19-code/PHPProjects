<?php 
	session_start();

	if(!empty($_SESSION['user']['id'])){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$id = $_GET['id'];

			require './controller/conection.php';
			$connection = Conection('articulos','root','');

			$statement = $connection->prepare('DELETE FROM articulos WHERE id = :id');
			$statement->execute(array(':id' => $id));
			
			header('Location: articulos.php');
		}else{
			header('Location: index.php');
		}
	}else{
		header('Location: index.php');
	}

?>