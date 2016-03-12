<?php 

class Experiencia
{
	private $id;
	private $empresa;
	private $cargo;
	private $descricao;
	private $dataInicio;
	private $dataFim;
	private $idCurriculo;

	function __construct($id, $empresa, $cargo, $descricao, $dataInicio, $dataFim, $idCurriculo){
		$this->id = $id;
		$this->empresa = $empresa;
		$this->cargo = $cargo;
		$this->descricao = $descricao;
		$this->dataInicio = $dataInicio;
		$this->dataFim = $dataFim;
		$this->idCurriculo = $idCurriculo;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEmpresa(){
		return $this->empresa;
	}

	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}

	public function getCargo(){
		return $this->cargo;
	}

	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDataInicio(){
		return $this->dataInicio;
	}

	public function setDataInicio($dataInicio){
		$this->dataInicio = $dataInicio;
	}

	public function getDataFim(){
		return $this->dataFim;
	}

	public function setDataFim($dataFim){
		$this->dataFim = $dataFim;
	}
	
	public function getIdCurriculo(){
		return $this->idCurriculo;
	}

	public function setIdCurriculo($idCurriculo){
		$this->idCurriculo = $idCurriculo;
	}
	
}