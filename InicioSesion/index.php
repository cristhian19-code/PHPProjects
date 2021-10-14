<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<form class="form" action="vista.php" method="POST">

		<h1>Registrarse</h1>

		<input class="form-control" placeholder="Email" type="email" name="email">
		<input class="form-control" placeholder="Password" type="password" name="password">
		<input class="form-control" placeholder="URL Avatar" type="url" name="url">
		<input class="form-control" placeholder="Username" type="text" name="username">

		<input class="btn btn-blue" type="submit" value="Registrarme" name="submit">
	</form>
</body>
</html>