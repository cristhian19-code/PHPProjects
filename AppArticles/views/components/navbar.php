<div class="navbar">
	<div>
		<a class="title-page" href="index.php">Blog-Art</a>
	</div>
	<div class="opciones">
		<?php if (!empty($_SESSION['user']['id'])): ?>
			<?php if ($_SESSION['user']['role'] == 'administrador'): ?>
				<a href="agregando_articulos.php">Agregar</a>
			<?php endif ?>
			<a href="articulos.php">Articulos</a>
			<a href="profile.php"><?php echo $_SESSION['user']['user'] ?></a>
			<a href="./controller/cerrar_sesion.php">Cerrar Sesion</a>
		<?php else: ?>
			<a href="login.php">Iniciar Sesion</a>
			<a href="signup.php">Registrarse</a>
		<?php endif ?>
	</div>
</div>