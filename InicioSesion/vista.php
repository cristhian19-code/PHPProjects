<?php 
	if(!isset($_POST['submit'])){
		header("Location: http://localhost/InicioSesion/");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./vista.css">
</head>
<body>
	<nav class="navbar">
		<ul class="nav-links">
			<li><a href="#">Home</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="#">Quienes Somos</a></li>
		</ul>

		<div class="user-info">
			<img class="avatar" src="<?php echo $_POST['url']; ?>" alt="">
			<p class="username"><?php echo $_POST['username']; ?></p>
		</div>
	</nav>
</body>
</html>