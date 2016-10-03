<?php 
namespace App\Models;

	/**
	* 
	*/
	class Connection
	{
		private $datos = array(
				"host" => "localhost",
				"user" => "root",
				"pass" => "",
				"db" => "mueblesydise"
			);

		private $con;


		function __construct()
		{
			$this->con = new \mysqli($this->datos['host'],
									$this->datos['user'],
									$this->datos['pass'],
									$this->datos['db']);
			$this->con->set_charset("utf8");
		}


		public function consultaSimple($sql)
		{
			$datos = $this->con->query($sql);
			return $datos;
		}


		public function consultaRetorno($sql)
		{
			$datos = $this->con->query($sql);
			return $datos;
		}

	}

?>