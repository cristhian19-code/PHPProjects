<?php session_start();
	$errores = '';

	if(isset($_SESSION['usuario'])){
		header('Location: tienda.php');
	}
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$password = hash('sha512', $_POST['password']);

		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=prueba_sql','root','');
			} catch (PDOException $e) {
				echo 'Error: '.$e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email AND password = :password LIMIT 1');

			$statement->execute(array(':email'=>$email,':password'=>$password));

			$resultado = $statement->fetch();
			
			if($resultado){
				$_SESSION['usuario'] = $resultado['usuario'];
				header('Location: tienda.php');
			}else{
				$errores .= '<li>Credenciales incorrectas o usuario no registrado</li>';
			}
		}else{
			$errores .= '<li>Correo no valido</li>';
		}
	}

	require './views/login.view.php';
?>
