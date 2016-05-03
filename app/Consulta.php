<?php 
	
	namespace App;
	use Illuminate\Database\Eloquent\Model;

	class Consulta extends Model{

		function __construct(){

		}

		
		//retorna todas as consultas do médico com status pendente
		public function getConsultas($id){

			$agendas = \DB::select("select * from consultas where medico_id = ?", [$id]);
			return $consultas;

		}


		//retorna todas as agendas do médico
		public function aprovarConsulta($arrConsulta){

			

		}

	}


 ?>