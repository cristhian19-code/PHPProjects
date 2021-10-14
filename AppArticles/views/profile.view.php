<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/profile.css?v=<?php echo time(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php require './views/components/navbar.php'; ?>
	<form class="form" id="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<p class="display-1">Datos Personales</p>
		<div class="form-group">
			<label for="firstname">Nombre:</label>
			<input class="form-control firstname" name="firstname" type="text" placeholder="Nombre" value="<?php echo $result['nombre'] ?>">
		</div>
		<div class="form-group">
			<label for="lastname">Apellido:</label>
			<input class="form-control lastname" name="lastname" type="text" placeholder="Apellido" value="<?php echo $result['apellido'] ?>">
		</div>
		<div class="form-group">
			<label for="age">Edad:</label>
			<input class="form-control age" name="age" type="number" placeholder="Edad" value="<?php echo $result['edad'] ?>">
		</div>

		<div class="form-group">
			<label for="password">Cambiar contraseña:</label>
			<input class="form-control password" name="password" type="password" placeholder="Contraseña" value="">
		</div>
		<input type="text" name="id" value="<?php echo $result['id'] ?>" hidden>
		<button type="submit" class="btn btn-green">Editar</button>
	</form>

</body>
<script src="./public/js/validacion.js"></script>
</html>