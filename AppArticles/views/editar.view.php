<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time();?>">
	<link rel="stylesheet" href="./public/css/editar.css?v=<?php echo time();?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time();?>">
	<title>Editar <?php echo $result['title']; ?></title>
</head>
<body>
	<?php require "./views/components/navbar.php" ?>
	
	<form class="card-articulo" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<div class="img-article">
			<img src="<?php echo $result['url'];?>" alt="">
		</div>
		<div class="data-edit">
			<label for="title">Titulo:</label>
			<input class="form-control" name="title" type="text" value="<?php echo $result['title']; ?>">

			<label for="title">Descripción:</label>
			<textarea class="form-control" name="description" rows="5" type="text"><?php echo $result['description']; ?></textarea>

			<label for="title">Imagen:</label>
			<input class="form-control" name="image" type="file">

			<input type="number" name="id" value="<?php echo $result['id']; ?>" hidden>

			<input type="submit" class="btn" value="Enviar">
		</div>
	</form>
</body>
</html>