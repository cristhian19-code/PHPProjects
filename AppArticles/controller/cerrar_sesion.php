<?php 
	session_start();

	session_destroy();

	$_SESSION = array();

	header('Location: http://localhost/AppArticles/index.php');
?>