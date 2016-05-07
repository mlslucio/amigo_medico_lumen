<?php

namespace App\Http\Controllers;
use App\Agenda;
use App\Consulta;

class AmController extends Controller{

	private $agenda;
	private $consulta;

	function __construct(Agenda $agenda, Consulta $consulta){

		$this->agenda = $agenda;
		$this->consulta = $consulta;

	}
	
	//retorna todas as agendas do médico
	public function getAgenda(){

		$token = $_SERVER["HTTP_TOKEN"];
		$agenda = $this->agenda->getAgendas($token);

		if (!empty($agenda)) {
			return $agenda;
		}else{
			return "Nenhuma agenda encontrada.";
		}


	}

	//retorna todas as consultas do médicotoken com status pendente
	public function getConsultas(){

		$token = $_SERVER["HTTP_TOKEN"];
		$consultas =  $this->consulta->getConsultas($token);		

		if (!empty($consultas)) {
			return $consultas;
		}else{
			return "Nenhuma consulta encontrada.";
		}

	}

	//salva consulta do medico(aprovada ou reprovada)
	public function aprovarConsulta(){

		$params = json_decode(file_get_contents('php://input'),true);
		dd($this->consulta->aprovarConsulta($params));

	}
}
?>