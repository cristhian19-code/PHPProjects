<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./public/css/index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">

	<style>
		html,body{
			margin: 0;
			padding: 0;
		}

		*{
			box-sizing: border-box;
		}

		p{
			font-size: 60px;
			text-align: center;
			font-weight: 100;
			margin: 10px;
		}
	</style>
</head>
<body>
	<?php require "./views/components/navbar.php" ?>

	<p>404</p>
	<p>Pagina no encontrada</p>
</body>
</html>