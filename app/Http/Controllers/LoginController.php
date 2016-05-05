<?php

namespace App\Http\Controllers;
use App\User;


class LoginController extends Controller{

	private $usuario;

	function __construct(User $usuario){

		$this->usuario = $usuario;

	}
	
	//valida o login no app
	public function autenticar(){
		
		$params = json_decode(file_get_contents('php://input'),true);
	
		$dadosUser = $this->usuario->autenticar($params["login"], $params["senha"]);

		if(!empty($dadosUser))
			return '1';
		else
			return '0';
	
	}

	
}
?>