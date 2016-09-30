<?php namespace Modelos;

/**
* 
*/
class Usuario
{
	private $atributo;
	private $contenido;

	private $CODIGO_USUARIO;
	private $NOMBRE_USUARIO;
	private $PASS;
	private $TIPO_USUARIO;
	private $FECHA_INGRESO;
	private $ACTIVO;
	private $RUT;
	
	function __construct()
	{
		$this->con = new Conexion();
	}

	public function set($atributo, $contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		$sql = "SELECT * FROM USUARIO WHERE $atributo = '".$this->$atributo."'";
		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

	public function listar(){
		$sql = "SELECT * FROM USUARIO";
		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

	public function add()
	{
		$sql = "INSERT INTO secciones (ID, NOMBRE) VALUES (null, '{$this->NOMBRE}')";
		$this->con->consultaSimple($sql);
	}

	 public function delete()
	 {
	 	$sql = "DELETE FROM secciones FROM id = '{$this->id}'";
	 	$this->con->consultaRetorno($sql);
	 }

	public function edit()
	{
		$sql = "UPDATE FROM secciones FROM id = '{$this->id}'";
		$this->con->consultaSimple($sql);
	}

	public function view()
	{
		$sql = "SELECT * FROM secciones FROM id = '{$this->id}'";
		$datos = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}
}


?>