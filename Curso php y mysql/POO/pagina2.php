<?php 
	session_start();

	if($_SESSION){
		echo $_SESSION['nombre'];
	}else{
		header("Location: http://localhost/POO/sesion.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Hello , <?php echo $_SESSION['nombre']; ?></h1>

	<a href="cerrar.php">Cerar sesion</a>
</body>
</html>