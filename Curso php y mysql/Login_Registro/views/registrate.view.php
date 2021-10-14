<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrate</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body class="d-flex bg-dark justify-content-center align-items-center">
	<form class="card p-4 col-md-5 col-10 col-lg-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<p class="display-4 text-center">Registrate</p>
		<div class="input-group mb-3">
		  <span class="input-group-text bg-success text-white" id="inputGroup-sizing-default"><i class="fas fa-at"></i></span>
		  <input name="email" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text bg-success text-white" id="inputGroup-sizing-default"><i class="fas fa-key"></i></span>
		  <input name="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text bg-success text-white" id="inputGroup-sizing-default"><i class="fas fa-key"></i></span>
		  <input name="password2" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

		<?php if (!empty($errores)): ?>
		<div class="errores">
			<ul class="text-danger">
				<?php echo $errores ?>
			</ul>
		</div>
		<?php endif ?>

		<input class="my-2 btn btn-outline-primary" type="submit" name="submit" value="Registrarme">
		<div class="text-center">
			<p class="my-1">Ya tienes una cuenta?</p>
			<a class="nav-link" href="login.php">Iniciar Sesion</a>
		</div>
	</form>
</body>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</html>