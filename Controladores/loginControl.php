<?php namespace Controladores;

	use Modelos\Usuario as Usuario;

	 class loginControl
	 {

	 	private $usuario;

	 	public function __construct()
	 	{
	 		$this->usuario = new Usuario();
	 	}

	 	public function index()
	 	{
	 		print "Aqui login";
	 	}

	 	public function comprobar()
	 	{

	 		$this->usuario->set('NOMBRE_USUARIO', $_POST['usuario']);
	 		$get = $this->usuario->get('NOMBRE_USUARIO');
	 		$return = mysqli_fetch_array($get);

	 		if (crypt($_POST['clave'], $return['PASS']) == $return['PASS'] || $return['PASS'] == $_POST['clave'])
	 		{
	 			header("Location: " . URL . "Home/index");
	 		}else{
	 			header("Location: " . URL . "login/index");
	 		}
	 		
	 	}

	 }


?>