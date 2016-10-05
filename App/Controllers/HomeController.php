<?php 
namespace App\Controllers;

use App\Controllers\ControllerTemplate;
use App\Controllers\Auth\Auth;
use App\Models\Usuario as Usuario;

	 class HomeController
	 {
	 	
	 	private $ct;
	 	private $auth;
	 	private $row;
	 	private $usuario;

	 	public function __construct()
	 	{
	 		$this->ct = new ControllerTemplate();
	 		$this->auth = new Auth();
			$this->usuario = new Usuario();
	 	}

	 	public function login()
	 	{

	 		$this->usuario->set('NOMBRE_USUARIO', $_POST['name']);
	 		$this->row = $this->usuario->getFor('NOMBRE_USUARIO');

	 		if (crypt($_POST['pass'], $this->row['PASS']) == $this->row['PASS'] || $this->row['PASS'] == $_POST['pass'])
	 		{
	 			$this->auth->newUser($this->row);
	 			header("Location: " . URL . "home");
	 			exit(); 
	 		}else{
	 			$this->ct->render('login.html');
	 		}

	 	}


	 	public function logout()
	 	{

	 			$this->auth->logout();
	 			header("Location: " . URL . "login");
	 			exit(); 

	 	}



	 }

?>