<?php

namespace App\Http\Controllers;
use App\Usuario;

class LoginController extends Controller{

	private $usuario;

	function __construct(Usuario $usuario){

		$this->usuario = $usuario;

	}
	
	//valida o login no app
	public function autenticar($arrDados){

		$status = $this->usuario->autenticar($arrDados);

		if ($satus) {
			# code...
		}else{
			
		}
		

	}

	
}
?>