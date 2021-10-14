<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/agregar.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
</head>
<body>
	<?php require "./views/components/navbar.php" ?>

	<form class="form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<p class="title-form">Agregar Articulo</p>
		
		<input name="title" typex="text" class="form-control" placeholder="Titulo">

		<textarea name="description" rows="5" class="form-control" placeholder="Descripcion"></textarea>

		<input class="form-control" type="file" name="image" placeholder="Subir un archivo">

		<input class="btn" type="submit" name="submit" value="Guardar">
	</form>
</body>
</html>