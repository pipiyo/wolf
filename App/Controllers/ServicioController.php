<?php 
namespace App\Controllers;

use App\Controllers\ControllerTemplate;
use App\Models\Servicio as Servicio;

	 class ServicioController
	 {
	 	
	 	private $ct;
	 	private $row;
	 	private $servicio;
	 	private $array = array();

	 	public function __construct()
	 	{
	 		$this->ct = new ControllerTemplate();
			$this->servicio = new Servicio();
	 	}

	 	public function index()
	 	{

	 		$this->array['servicios'] = array('Adquisiciones',
											  'Produccion',
											  'Despacho',
											  'Instalacion',
											  'Desarrollo',
											  'Mantencion',
											  'Sillas',
											  'Bodega',
											  'Sistema',
											  'Servicio Tecnico',
											  'Prevención de Riesgos',
											  'FI',
											  'Factura',
											  'Nota de Credito');
	 		$this->array['categorias'] = array('Proceso',
											   'Proyecto',
											   'Solicitud');
	 		$this->array['tittle'] = 'Ingreso nuevo servicio';
			$this->array['realizador'] = $_SESSION['user_name'];


	 		$this->ct->render('Servicio/ingresar.html', $this->array);


	 	}


	 }

?>