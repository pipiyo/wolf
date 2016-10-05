<?php
namespace App\Routes\RoutesList;

//use App\Controllers\HomeController as HomeController;

trait ServicioRoutes
{


    public function getServicio()
    {

/*
		$this->router->mount('', function() {

		    $this->router->get('/', function() {
		        echo $this->twig->render('login.html');
		    });

		    $this->router->get('/login', function() {
		        echo $this->twig->render('login.html');
		    });

		    $this->router->post('/', function() {
		    	$this->controller = new HomeController();
		    	$this->method = $this->controller->login();
		    });

		    $this->router->post('/login', function() {
		    	$this->controller = new HomeController();
		    	$this->method = $this->controller->login();
		    });

		});
*/


        $this->router->get('home/servicio', function() {
            echo $this->twig->render('Servicio/ingresar.html', array('tittle' => 'Aqui ingresar Servicio' ));
        });


    }
}
