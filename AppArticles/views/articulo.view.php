<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/articulo.css?v=<?php echo time(); ?>">
	<title>Document</title>
</head>
<body>
	<?php require './views/components/navbar.php'; ?>
	<div class="card-articulo">
		<div class="img-article">
			<img src="<?php echo $result['url'];?>" alt="">
		</div>
		<div class="data">
			<p class="title-article"><?php echo $result['title']; ?></p>
			<p class="date-article"><?php echo $result['date']." ".$result['hour'] ?></p>
			<p class="description-article"><?php echo $result['description']; ?></p>
		</div>
	</div>
	<div class="container-comments">
		<form action="comentario_articulo.php" method="POST" class="inputs-comment">
			<input name="id_articulo" type="text" value="<?php echo $result['id'] ?>" hidden>
			<input class="input-comment" type="text" name="comment" placeholder="Escribe un comentario ....">
			<input class="btn-comment" type="submit" value="Enviar">
		</form>
		<div class="comments">
			<?php while ($res = $statement_comment->fetch()): ?>
			<div class="comment">
				<img class="avatar" src="https://images.pexels.com/photos/2449600/pexels-photo-2449600.png?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" height="60px" width="60px">
				<div>
					<p class="username"><?php echo $res['nombre'] ?></p>
					<p class="date"><?php echo $res['fecha'].' '.$res['hora'] ?></p>
					<p class="text"><?php echo $res['comentario'] ?></p>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>	
</body>
</html>