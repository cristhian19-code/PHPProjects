<?php 
	$conexion = new mysqli('localhost','root','','prueba_sql');

	if(isset($_POST['submit'])){

		if(!$conexion->connect_error){
			$statement = $conexion->prepare("INSERT INTO tienda(ID, Nombre, Descripcion, URL, Precio) VALUES (?,?,?,?,?)");


			$statement->bind_param('ssssi',$id,$nombre,$descripcion,$url,$precio);


			$id = null;
			$nombre = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];
			$url = $_POST['url'];
			$precio = $_POST['precio'];

			$statement->execute();

			if($conexion->affected_rows){
				header('Location: http://localhost/Tienda/productos.php');
			}else{
				echo 'Hubo un problema';
			}

		}else{
			die();
		}

	}

?>