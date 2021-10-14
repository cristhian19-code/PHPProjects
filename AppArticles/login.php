<?php 
	session_start();


	$errores = '';

	if(!empty($_SESSION['user']['id'])){
		header('Location: index.php');
		die();
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
		$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
		$password = hash('sha512', $password);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errores .= '<li>Correo no valido</li>';
		}else{
			require './controller/conection.php';
			$conection = Conection('articulos','root','');

			$statement = $conection->prepare('SELECT * FROM usuarios where email = :email and password = :password LIMIT 1;');

			$statement->execute(array(':email'=>$email,':password'=>$password));

			$result = $statement->fetch();

			if($result){
				$_SESSION['user']['role'] = $result['rol'];
				$_SESSION['user']['id'] = $result['id'];
				$_SESSION['user']['user'] = $result['nombre'];
				header('Location: index.php');
			}else{
				$errores .= '<li>Usuario no registrado</li>';
			}


		}
	}

	require './views/login.view.php';

?>