<?php 
namespace App\Models;

use App\Models\Database as Db;

class Servicio
{
	private $sqlquery;
	private $data;

	private $CODIGO_SERVICIO;
	private $NOMBRE_SERVICIO;
	private $FECHA_INICIO;
	private $FECHA_ENTREGA;
	private $REALIZADOR;
	private $SUPERVISOR;
	private $OBSERVACIONES;
	private $ESTADO;
	private $CODIGO_USUARIO;
	private $CODIGO_PROYECTO;
	private $DESCRIPCION;
	private $DIRECCION;
	private $TPTMFI;
	private $GUIA_DESPACHO;
	private $CODIGO_OC;
	private $INSTALADOR_1;
	private $INSTALADOR_2;
	private $INSTALADOR_3;
	private $INSTALADOR_4;
	private $LIDER;
	private $DIAS;
	private $PREDECESOR;
	private $PUESTOS;
	private $PROCESO;
	private $EJECUTOR;
	private $DOCUMENTO_SERVICIO_TECNICO;
	private $TIPO_SERVICIO;
	private $TECNICO_1;
	private $TECNICO_2;
	private $CODIGO_RADICADO;
	private $TRANSPORTE;
	private $FECHA_REALIZACION;
	private $RECLAMOS;
	private $OC;
	private $FECHA_PRIMERA_ENTREGA;
	private $CATEGORIA;
	private $CANTIDAD;
	private $BODEGA;
	private $FI;
	private $ORDEN_SERVICIO;
	private $VALE;
	private $CODIGO_COMUNA;
	private $PROGRESO;
	private $M3;
	private $FACTURA;
	private $MONTO_FACTURA;
	private $ARCHIVO;
	private $RECEPCION;
	
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

		$sql = "SELECT * FROM servicio";
		$datos = $this->bd->querySimple($sql);
		return $datos;

	}

	public function getFor($attribute)
	{
		$this->sqlquery = "SELECT * FROM servicio WHERE $attribute = '{$this->$attribute}'";
		$this->data = $this->bd->querySimple($this->sqlquery);
		return $this->data;
	}

}


?>