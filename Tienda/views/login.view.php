<!DOCTYPE html>
<html style="height: 100%" lang="es">

<?php include './components/header.php'; ?>

<body style="height: 100%;" class="d-flex justify-content-center align-items-center bg-dark">
	<form class="card col-10 col-md-4 px-4 py-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<h1 class="display-4 text-center">Iniciar Sesion</h1>
		
		<label for="email">Email: </label>
		<input type="email" name="email" class="form-control my-3" placeholder="Email">

		<label for="email">Password: </label>
		<input type="password" name="password" class="form-control my-3" placeholder="Password">

		<input class="btn btn-outline-primary my-2" type="submit" value="Iniciar Sesion">

		<?php if (!empty($errores)): ?>
		<div class="text-danger">
			<ul><?php echo $errores; ?></ul>
		</div>
		<?php endif ?>

		<div class="text-center">
			<p class="my-1">Aun no estas registrado?</p>
			<a class="nav-link" href="register.php">Registrate</a>
		</div>
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>