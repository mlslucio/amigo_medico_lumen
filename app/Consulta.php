<?php 
	
	namespace App;
	use Illuminate\Database\Eloquent\Model;

	class Consulta extends Model{

		function __construct(){

		}

		
		//retorna todas as consultas do médico com status pendente
		public function getConsultas($token){


			$id = \DB::select("select id from user where token = ?", [$token]); 	
			$idConvertido = (int) $id;
			$consultas = \DB::select("select * from consultas where medico_id = ?", [$idConvertido]);

			return $consultas;

		}

		//retorna todas as agendas do médico
		public function aprovarConsulta($arrConsulta){

			$status = \DB::update("update consultas");
			return $status;

		}

	}


 ?>