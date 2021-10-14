<?php 
	//Clase persona
	class Persona
	{
		public $edad;
		public $nombre;
		public $pais;

		function __construct($nombre,$edad,$pais){
			$this->edad = $edad;
			$this->nombre = $nombre;
			$this->pais = $pais;
		}

		public function mostrarInformacion()
		{
			echo 'Mi nombre es '. $this->nombre .' y tengo '. $this->edad .' y soy de '. $this->pais;
		}
	}

	//Clase estudiante que hereda de persona

	class Estudiante extends Persona
	{
		public $carrera; 

		function __construct($nombre,$edad,$pais,$carrera)
		{
			parent::__construct($nombre,$edad,$pais);

			$this->carrera = $carrera;
		}
	}

	//Clase trabajador que hereda de persona
	class Trabajador extends Persona
	{
		public $area;

		function __construct($nombre,$edad,$pais,$area)
		{
			parent::__construct($nombre,$edad,$pais);
			$this->area = $area;
		}
	}

	$christian = new Estudiante("Christian",21,"Peru","Desarrollador Web");


	echo $christian->carrera;

	echo "<br />";
	$marco = new Trabajador("Marco",34,"Mexico","Obrero");

	echo $marco->area;
?>