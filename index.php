<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://local.wolf/");
	date_default_timezone_set('America/Santiago');
		
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Vistas/plantilla.php";
	Config\Enrutador::run(new Config\Request());
?>