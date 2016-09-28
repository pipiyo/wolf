<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://10.0.1.16:8001/");
	date_default_timezone_set('America/Santiago');

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	Config\Enrutador::run(new Config\Request());

?>