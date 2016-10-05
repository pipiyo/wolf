<?php 
namespace App\Models;

use App\Models\Database as Db;

class Sub_servicio
{
	private $sqlquery;
	private $data;

	private $id_sub_servicio;
	private $nombre;
	private $descripcion;
	private $fecha_ingreso;
	private $fecha_entrega;
	private $CODIGO_SERVICIO;
	
	public function __construct()
	{
		$this->bd = new Db();
	}

	public function set($attribute, $content)
	{
		$this->$attribute = $content;
	}

	public function get($attribute)
	{
		
		return $this->$attribute;
	}

	public function all(){

		$sql = "SELECT * FROM sub_servicio";
		$datos = $this->bd->querySimple($sql);
		return $datos;

	}

	public function getFor($attribute)
	{
		$this->sqlquery = "SELECT * FROM sub_servicio WHERE $attribute = '{$this->$attribute}'";
		$this->data = $this->bd->querySimple($this->sqlquery);
		return $this->data;
	}

}


?>