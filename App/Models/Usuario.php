<?php 
namespace App\Models;

use App\Models\Database as Db;

class Usuario
{
	private $sqlquery;
	private $data;

	private $CODIGO_USUARIO;
	private $NOMBRE_USUARIO;
	private $PASS;
	private $TIPO_USUARIO;
	private $FECHA_INGRESO;
	private $ACTIVO;
	private $RUT;
	
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

		$sql = "SELECT * FROM USUARIO";
		$datos = $this->bd->querySimple($sql);
		return $datos;

	}

	public function getFor($attribute)
	{
		$this->sqlquery = "SELECT * FROM USUARIO WHERE $attribute = '{$this->$attribute}'";
		$this->data = $this->bd->querySimple($this->sqlquery);
		return $this->data;
	}

}


?>