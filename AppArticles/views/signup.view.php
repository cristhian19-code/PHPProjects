<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/session.css?v=<?php echo time(); ?>">

	<title>Registrate</title>
</head>
<body>
	<?php require "./views/components/navbar.php" ?>
	
	<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		
		<p class="title">Registrarme</p>

		<label for="firstname">Nombre: </label>
		<input type="text" name="firstname" class="form-control" placeholder="Nombre">

		<label for="lastname">Apellido: </label>
		<input type="text" name="lastname" class="form-control" placeholder="Apellido">

		<label for="age">Edad: </label>
		<input type="number" name="age" class="form-control" placeholder="Edad">

		<label for="phone">Telefono/Celular: </label>
		<input type="number" name="phone" class="form-control" placeholder="Telefono/Celular">

		<label for="email">Email: </label>
		<input type="email" name="email" class="form-control" placeholder="Email">

		<label for="password">Password: </label>
		<input type="password" name="password" class="form-control" placeholder="Password">


		<input class="btn" name="submit" type="submit" value="Registrarme">

		<ul class="errores">
			<?php echo $errores ?>			
		</ul>
		
		<div class="redirect">
			<p>Ya tienes una cuenta?</p>
			<a class="link" href="login.php">Inicia Sesion</a>
		</div>
	</form>
</body>
</html>