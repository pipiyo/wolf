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

        $this->router->get('/home', function() {
            echo $this->twig->render('Home/home.html', array('name' => $_SESSION['user_type'] ));
        });


        $this->router->get('/logout', function() {
		    $this->controller = new HomeController();
		    $this->controller->logout();
        });


    }
}
