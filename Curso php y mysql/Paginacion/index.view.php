<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Paginacion</title>
</head>
<body>
	<div class="container">
		<h1 class="title">Articulos</h1>
		<section class="articulos">
			<ul>
				<?php while($valor = $articulos->fetch_assoc()): ?>
					<li><?php echo $valor['ID'] ?>.- <?php echo $valor['Titulo'] ?></li>
				<?php endwhile; ?>
			</ul>
		</section>
		<section class="paginacion">
			<ul>
				<?php if($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1?>">&laquo;</a></li>

				<?php endif; ?>
				
				<?php for ($i = 1; $i <= $numeroPaginas ; $i++): ?>
							
					<?php if ($i == $_GET['pagina']): ?>
						<li class="active"><a href="#"><?php echo $i ?></a></li>	
					<?php else: ?>
						<li><a href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php endif ?>

				<?php endfor; ?>


				<?php if($pagina == $numeroPaginas): ?>
					<li class="disabled"><a>&raquo;</a></li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</section>
	</div>
</body>
</html>