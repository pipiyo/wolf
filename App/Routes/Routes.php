<?php
namespace App\Routes;

use App\Routes\RoutesTemplate;
use App\Routes\RoutesList\HomeRoutes;

class Routes extends RoutesTemplate
{
    use HomeRoutes;
    private $controller;
    private $method;

    public function on()
    {
        
        self::getHome();

        $this->router->run();

    }


}
