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
		
		dd("teste");
		parse_str($dados, $arr);

		$dadosUser = $this->usuario->autenticar($arr);

		if(!empty($dadosUser))
			return '1';
		else
			return '0';
	
	}

	
}
?>