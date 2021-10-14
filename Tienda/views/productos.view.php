<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
	<?php include './components/header.php'; ?>

</head>
<body>
	<?php include './components/navbar.php'; ?>

	<div class="container-comidas">
		<?php while($comida = $resultado->fetch_assoc()):?>
			<div class="card-comida">
				<img src="<?php echo $comida['URL'] ?>" alt="" height="250">
				<div class="content">
					<h5 class="nombre"><?php echo $comida['Nombre'] ?></h5>
					<p class="descripcion"><?php echo $comida['Descripcion'] ?></p>
					<p class="precio">S/. <?php echo $comida['Precio'] ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>