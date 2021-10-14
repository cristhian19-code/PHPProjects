<?php 
	session_start();

	if(isset($_SESSION['usuario'])){
		require 'tienda.php';
	}else{
		header('Location: login.php');
	}
	
 ?>