<?php 
namespace App\Models;

	/**
	* 
	*/
	class Database
	{
		private $request;
		private $data;
		private $bd = array(
				"host" => "localhost",
				"user" => "root",
				"pass" => "",
				"db" => "mueblesydise"
			);

		private $con;


		public function __construct()
		{
			$this->con = new \mysqli($this->bd['host'],
									$this->bd['user'],
									$this->bd['pass'],
									$this->bd['db']);
			$this->con->set_charset("utf8");
		}


		public function querySimple($sql)
		{
			$this->request = $this->con->query($sql);
			$this->data = $this->request->fetch_assoc();
			return $this->data;
		}

/*
 *$params = array(&$firstName, &$lastName, &$address, &$postcode, &$email, &$password);
 *$result = $this->db->bind("INSERT INTO Users VALUES (?, ?, ?, ?, ?, ?)", 'ssssss', $params);
 */

		public function queryBlind($sql, $type, $params)
		{
			$this->request = $this->con->prepare($sql);

			call_user_func_array(array($this->request, "bind_param"), array_merge(array($type), $params));
			
			$this->request->execute();
			$this->request>close();

		}

	}

?>