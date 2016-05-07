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
		$arrDadosUser;

		if(!empty($dadosUser)){
			
			$token = $this->gerarToken();		
			$this->usuario->guardarToken($dadosUser[0]->id, $token);
			
			$arrDadosUser[0] = $token;
			$arrDadosUser[1] = $dadosUser[0]->email;s

			return json_encode($arrDadosUser);
		
		}else{
			return '0';
		}
	
	}


	public function gerarToken(){

		$dataAtual = str_replace("/", "", date("Y-m-d"));

		return app('hash')->make($dataAtual);

	}

	
}
?>