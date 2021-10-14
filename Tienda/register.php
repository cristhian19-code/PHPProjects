<?php session_start(); 
	
	$errores = '';

	if(isset($_SESSION['usuario'])){
		header('Location: tienda.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
		$apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
		$edad = $_POST['edad'];
		$numero = $_POST['numero'];
		$usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

		$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
		$password = hash('sha512', $password);

		$password2 = filter_var($_POST['password2'],FILTER_SANITIZE_STRING);
		$password2 = hash('sha512', $password2);

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errores .= '<li>Correo Invalido</li>';
		}

		try {
				$conexion = new PDO('mysql:host=localhost;dbname=prueba_sql','root','');

				$statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email');

				$statement->execute(array(':email'=>$email));
				$resultado = $statement->fetch();

				//verificacion si el correo ya se uso para otra cuenta
				if($resultado){
					$errores .= '<li>Correo en uso</li>';
				}

				//verificar si las contraseñas del form coinciden
				if($password != $password2){
					$errores .= '<li>Las contraseñas no coinciden</li>';
				}

				if(empty($errores)){
					$statement = $conexion->prepare('INSERT INTO usuarios(id,nombre,apellido,edad,numero,usuario,email,password) VALUES (null, :nombre, :apellido, :edad, :numero, :usuario, :email, :password);');

					$statement->execute(array(':nombre'=>$nombre,':apellido'=>$apellido,':edad'=>$edad,':numero'=>$numero, ':usuario'=>$usuario,':email'=>$email, ':password'=>$password));

					header('Location: login.php');
				}

			} catch (PDOException $e) {
				echo 'Error: '.$e->getMessage();
			}

	}

	require './views/register.view.php';
?>