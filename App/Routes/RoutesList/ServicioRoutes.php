<?php
namespace App\Routes\RoutesList;

use App\Controllers\ServicioController;			


trait ServicioRoutes
{

    public function getServicio()
    {

		$this->router->mount('/home/servicio', function() {

		    $this->router->get('/new', function() {
		    	$this->controller = new ServicioController();
		    	$this->controller->index();
		    });

		    $this->router->get('/adquisicion', function() {
		    	$this->controller = new AdquisicionController();
		    	$this->controller->index();
		    });

		});

    }
}
