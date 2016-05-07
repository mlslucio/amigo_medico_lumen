<?php 
	
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	

	class Agenda extends Model{

		function __construct(){

		}

		//retorna todas as agendas do médico
		public function getAgendas($token){

			$id = \DB::select("select id from user where token = ?", [$token]); 	
			$agendas = \DB::select("select * from agendas where medico_id = ?", [$id[0]->id]);
			
			return $agendas;

		}

	}


 ?>