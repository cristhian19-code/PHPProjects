<?php 
	session_start();
	$errores = '';

	if(isset($_SESSION['usuario'])){
		header('Location: index.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_EMAIL);

		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if(empty($email) or empty($password) or empty($password2)){
			$errores.='<li>Complete todo el formulario</li>';
		}else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$errores.= '<li>Correo invalido</li>';
			} else {
				try {
					$conexion = new PDO('mysql:host=localhost;dbname=usuarios','root','');

					$statement = $conexion->prepare('SELECT * FROM usuarios WHERE Email= :email LIMIT 1');

					$statement->execute(array(':email'=> $email));
					$resultado = $statement->fetch();

					if(!$resultado){
						$password = hash('sha512', $password);
						$password2 = hash('sha512', $password2);

						if($password2 != $password){
							$errores .= '<li>Las contraseñas no coinciden</li>';
						}else{
							$statement = $conexion->prepare('INSERT INTO usuarios(ID,Email,Contraseña) VALUES (null,:email,:password)');

							$statement->execute(array(':email'=>$email,':password'=>$password));

							header('Location: login.php');
						}

					}else{
						$errores.= '<li>El usuario ya esta registrado</li>';
					}
				} catch (PDOException $e) {
					echo "Error: ". $e->getMessage();
				}
			}
		}
	}

	require './views/registrate.view.php';

?>