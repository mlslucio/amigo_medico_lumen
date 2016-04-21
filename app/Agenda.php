<?php 
	
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	

	class Agenda extends Model{

		function __construct(){

		}

		//retorna todas as agendas do médico
		public function getAgendas($id){

			$agendas = \DB::select("select * from agendas where id = ?", [$id]);
			return $agendas;

		}

	}


 ?>