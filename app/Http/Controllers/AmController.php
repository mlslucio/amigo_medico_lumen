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
	public function getAgenda($id){

		exit(json_encode($this->agenda->getAgendas($id)));

	}

	//retorna todas as consultas do médico com status pendente
	public function getConsultas($id){

		exit(json_encode($this->consulta->getConsultas($id)));

	}

	//salva consulta do medico(aprovada ou reprovada)
	public function aprovarConsulta($arrConsulta){

		dd($this->consulta->aprovarConsulta($arrConsulta));

	}
}
?>