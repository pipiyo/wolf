<?php 
namespace App\Controllers\ServicioControllers;

use App\Controllers\ControllerTemplate;
use App\Models\Servicio as Servicio;

	 class AdquisicionController
	 {
	 	
	 	private $ct;
	 	private $auth;
	 	private $row;
	 	private $usuario;
	 	private $array = array();

	 	public function __construct()
	 	{
	 		$this->ct = new ControllerTemplate();
			$this->servicio = new Servicio();
	 	}

	 	public function index()
	 	{

	 		$this->servicio->set('NOMBRE_SERVICIO', 'Adquisicion');
	 		$this->row = $this->servicio->getFor('NOMBRE_SERVICIO');
	 		$this->array['servicios'] = $this->row;
	 		$this->array['tittle'] = 'Adquisiciones';

	 		$this->ct->render('Servicio/listar.html', $this->array);


	 	}


	 }

?>