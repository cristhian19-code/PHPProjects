<!DOCTYPE html>
<html lang="en">
<?php include './components/header.php'; ?>
<body>
	<?php include './components/navbar.php'; ?>

	<div class="mt-4 container-fluid d-flex justify-content-center align-items-center">
		<form class="card col-10 col-md-5 p-4" action="./conexion/conexion_agregar.php" method="POST">
			<p class="display-3 text-center">Registro</p>

			<input type="text" name="nombre" class="my-2 form-control" placeholder="Nombre del producto">
			<textarea name="descripcion" cols="10" rows="10" class="my-2 form-control" placeholder="Descripcion del producto"></textarea>
			<input type="text" name="url" class="my-2 form-control" placeholder="URL producto">
			<input type="number" name="precio" step="0.1" class="my-2 form-control" placeholder="Precio del producto">

			<input type="submit" name="submit" value="Agregar" class="btn btn-outline-primary">
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>