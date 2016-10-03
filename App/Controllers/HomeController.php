<?php 
namespace App\Controllers;

use App\Models\Usuario as Usuario;

	 class HomeController
	 {
	 	private $usuario;
	 	private $request;
	 	private $row;
	 	private $view;
	 	private $data = array();

	 	public function __construct()
	 	{
			$this->usuario = new Usuario();
	 	}

	 	public function index()
	 	{

	 		$this->usuario->set('NOMBRE_USUARIO', $_POST['name']);
	 		$this->request = $this->usuario->get('NOMBRE_USUARIO');
	 		$this->row = mysqli_fetch_array($this->request);


	 		if (crypt($_POST['pass'], $this->row['PASS']) == $this->row['PASS'] || $this->row['PASS'] == $_POST['pass'])
	 		{
	 			$this->view = 'Home/home.html';
	 		}else{
	 			$this->view = 'login.html';
	 		}



	 		$this->data['data'] = $this->row;
	 		$this->data['view'] = $this->view;
	 		return $this->data;
	 	}


	 }


?>