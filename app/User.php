<?php

namespace App;

use Auth;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Http\Request;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

      //valida o login no app
		public function autenticar($arr){

			return $this->auth($arr["login"], $arr["senha"]);

		}

	
		public static function auth($login, $senha){

			$dadosUser = \DB::select("select * from user where email = ? and password_hash = ?", [$login,app('hash')->make($senha)]);
			
			return $dadosUser;

		}

    


}
