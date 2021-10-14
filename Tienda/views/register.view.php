<!DOCTYPE html>
<html lang="es">

<?php include './components/header.php'; ?>

<body class="d-flex justify-content-center align-items-center bg-dark py-4">
	<form class="card col-10 col-md-6 px-4 py-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<h1 class="display-4 text-center">Registrate</h1>
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" class="form-control my-1" placeholder="Nombre">

		<label for="apellido">Apellido: </label>
		<input type="text" name="apellido" class="form-control my-1" placeholder="Apellido">

		<label for="edad">Edad: </label>
		<input type="number" name="edad" class="form-control my-1" placeholder="Edad">

		<label for="numero">Telefono/Celular: </label>
		<input type="number" name="numero" class="form-control my-1" placeholder="Telefono/Celular">

		<label for="username">Username: </label>
		<input type="text" name="usuario" class="form-control my-1" placeholder="Username">

		<label for="email">Email: </label>
		<input type="email" name="email" class="form-control my-1" placeholder="Email">

		<label for="password">Contraseña: </label>
		<input type="password" name="password" class="form-control my-1" placeholder="Password">

		<label for="password2">Confirmar Contraseña</label>
		<input type="password" name="password2" class="form-control my-1" placeholder="Confirmar Password">

		<?php if (!empty($errores)): ?>
			<div class="text-danger">
				<ul>
					<?php echo $errores; ?>
				</ul>
			</div>		
		<?php endif; ?>


		<input class="btn btn-outline-primary my-2" type="submit" value="Iniciar Sesion">

		<div class="text-center">
			<p class="my-1">Ya tienes una cuenta?</p>
			<a class="nav-link" href="login.php">Login</a>
		</div>
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>