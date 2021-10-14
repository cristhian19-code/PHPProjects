<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/session.css?v=<?php echo time(); ?>">
	<title>Login</title>
</head>
<body>
	<?php require "./views/components/navbar.php" ?>
	<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<p class="title">Login</p>
		<label for="email">Email: </label>
		<input type="email" name="email" class="form-control" placeholder="Email">

		<label for="password">Password: </label>
		<input type="password" name="password" class="form-control" placeholder="Password">

		<input class="btn" type="submit" value="Iniciar">

		<ul class="errores">
			<?php echo $errores ?>			
		</ul>
		
		<div class="redirect">
			<p>Aun no estas registrado?</p>
			<a class="link" href="signup.php">Registrate</a>
		</div>
	</form>
</body>
</html>