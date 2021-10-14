<?php 
	session_start();

	$errores = "";

	if(isset($_SESSION['usuario'])){
		header('Location: index.php');
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_EMAIL);
		$password = $_POST['password'];
		$password = hash('sha512', $password);

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=usuarios','root','');

			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE Email = :email AND Contraseña = :password LIMIT 1');

			$statement->execute(array(':email' => $email,':password' => $password));

			$resultado = $statement->fetch();


			if (!$resultado) {
				$errores .= '<li>Usuario no registrado</li>';
			} else {
				$_SESSION['usuario'] = $email;
				header('Location: index.php');
			}

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}

	require './views/login.view.php';
?>