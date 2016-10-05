<?php
namespace App\Routes;

use App\Routes\RoutesTemplate;
use App\Routes\RoutesList\HomeRoutes;
use App\Routes\RoutesList\ServicioRoutes;

class Routes extends RoutesTemplate
{
    use HomeRoutes,ServicioRoutes;
    
    private $controller;
    private $method;

    public function on()
    {
        
        self::getHome();

    	$this->router->before('GET|POST', '/home/.*', function() {
    		if (!isset($_SESSION['user_name'])) {
        		header("location: " . URL . "login");
        		exit();
    		}
		});

        self::getServicio();

        $this->router->run();

    }


}
