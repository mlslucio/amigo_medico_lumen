<?php 
	
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Auth\Authenticatable;
	use Laravel\Lumen\Auth\Authorizable;

	class Usuario extends Model{

		function __construct(){

		}

		//valida o login no app
		public function autenticar($login, $senha){

			

		}

	}


 ?>