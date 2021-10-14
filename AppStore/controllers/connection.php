<?php
function Connection ($dbname,$user,$password){
	try {
		$conection = new PDO("mysql:host=localhost;dbname=$dbname",$user,$password);

		return $conection;

	} catch (PDOException $e) {
		return false;
	}
}

?>
