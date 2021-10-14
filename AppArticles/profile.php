<?php 
	session_start();
	if(!empty($_SESSION['user']['id'])){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			require './controller/conection.php';

			$id = $_POST['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$age = $_POST['age'];
			$password = $_POST['password'];

			$connection = Conection('articulos','root','');
			
			$statement = $connection->prepare('UPDATE usuarios SET nombre = :nombre,apellido = :apellido, edad = :edad  WHERE id = :id');
			$statement->execute(array(':nombre' => $firstname,':apellido' => $lastname,':edad' => $age,':id' => $id));

		}else{
			$id = $_SESSION['user']['id'];

			require './controller/conection.php';
			$connection = Conection('articulos','root','');
		
			$statement = $connection->prepare('SELECT * FROM usuarios WHERE id = :id LIMIT 1');
			$statement->execute(array(':id' => $id));

			$result = $statement->fetch();

			require './views/profile.view.php';	
		}
		
	}else{
		header('Location: index.php');
	}

?>
