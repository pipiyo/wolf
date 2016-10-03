<?php
namespace App\Routes\RoutesList;

use App\Controllers\HomeController as HomeController;

trait HomeRoutes
{
    public function getHome()
    {


		$this->router->mount('', function() {

		    $this->router->get('/', function() {
		        echo $this->twig->render('login.html');
		    });

		    $this->router->post('/', function() {
		    	$this->controller = new HomeController();
		    	$this->method = $this->controller->index();
		        

		        echo $this->twig->render($this->method['view'], $this->method['data']);


		        //header("Location: " . URL . "home"); 
 				//exit();

		    });

		});



        $this->router->get('/home', function() {
            echo $this->twig->render('Home/home.html', array('TIPO_USUARIO' => 'ENTRANDO A HOME'));
        });


    }
}
