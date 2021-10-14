<?php session_start();
	if(isset($_SESSION['usuario'])){
		require './views/tienda.view.php';
	}else{
		header('Location: login.php');
	}
 ?>