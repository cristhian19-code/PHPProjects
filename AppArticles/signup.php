<?php 
	session_start();


	$errores = '';

	if(!empty($_SESSION['user']['id'])){
		header('Location: index.php');
		die();
	}

	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
		$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
		$age = $_POST['age'];
		$phone = $_POST['phone'];
		$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
		$password = hash('sha512', $_POST['password']);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errores .='<li>Correo no valido</li>';
		}else{
			require './controller/conection.php';
			
			$conection = Conection('articulos','root','');

			$statement = $conection->prepare('SELECT * FROM usuarios WHERE email = :email LIMIT 1');

			$statement->execute(array(':email' =>$email));

			$result = $statement->fetch();

			if($result){
				$errores .= '<li>Correo en uso</li>';
			}else{
				$statement = $conection->prepare('INSERT INTO usuarios (id,nombre,apellido,edad,celular,email,password,rol) VALUES (:id, :nombre, :apellido, :edad, :celular, :email, :password, :rol);');

				$statement->execute(array(':id' => null,':nombre'=>$firstname, ':apellido'=>$lastname, ':edad'=>$age, ':celular'=>$phone, ':email'=>$email, ':password'=>$password , ':rol'=> 'usuario'));

				header('Location: login.php');

			}

		}

	}
	
	require './views/signup.view.php';

?>