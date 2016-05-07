<?php

namespace App;

use Auth;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Http\Request;
use Log;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

      //valida o login no app
		public function autenticar($login, $senha){

			return $this->auth($login, $senha);

		}

	
		public static function auth($login, $senha){


			$dadosUser = \DB::select("select email, id from user where email = ? and password_hash = ?", [$login,sha1($senha)]);

			return $dadosUser;

		}

		public function guardarToken($id, $token){

			$affected = \DB::update('update user set token = ? where id = ?', [$token, $id]);
		}

    


}
