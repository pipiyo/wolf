<?php 
namespace App\Controllers\Auth;

	 class Auth
	 {

	 	public function newUser($user)
	 	{

	 		$_SESSION['user_name'] = $user['NOMBRE_USUARIO'];
	 		$_SESSION['user_id'] = $user['CODIGO_USUARIO'];
	 		$_SESSION['user_type'] = $user['TIPO_USUARIO'];

	 	}

	 	public function logout()
	 	{

	 		session_destroy();

	 	}


	 }

?>