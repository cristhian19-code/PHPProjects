<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/articulos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">

	<title>Articulos</title>
</head>
<body>
	<?php require './views/components/navbar.php'; ?>

	<div class="container-articles">
		<?php while ($res = $statement->fetch()): ?>
		<div class="article">
			<div class="header">
				<p class="title-article"><?php echo $res['title'] ?></p>
				<p class="date-article"><?php echo $res['date']." ".$res['hour'] ?></p>
			</div>
			<div class="container-img">
				<img class="img-article" src="<?php echo $res['url'] ?>" width="100%" height="360px">
			</div>

			<dir class="buttons">
				<a class="btn btn-orange" href="articulo.php?id=<?php echo $res['id']; ?>">Ver mas</a>
				<?php if (!empty($_SESSION['user']['id'])): ?>
					<?php if ($_SESSION['user']['role'] == 'administrador'): ?>
						<div class="admin-buttons">
							<a href="editar.php?id=<?php echo $res['id'] ?>" class="btn btn-success">Editar</a>
							</form>
							<a href="eliminar.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">Eliminar</a>
						</div>
					<?php endif ?>
				<?php endif ?>
			</dir>
		</div>
		<?php endwhile; ?>
	</div>
</body>
</html>