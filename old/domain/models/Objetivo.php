<?php 

class Objetivo
{
	private $id;
	private $descricao;
	private $pretencaoSalarial;
	private $idCurriculo;

	function __construct($id, $descricao, $pretencaoSalarial, $idCurriculo){
		$this->id = $id;
		$this->descricao = $descricao;
		$this->pretencaoSalarial = $pretencaoSalarial;
		$this->idCurriculo = $idCurriculo;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getPretencaoSalarial(){
		return $this->pretencaoSalarial;
	}

	public function setPretencaoSalarial($pretencaoSalarial){
		$this->pretencaoSalarial = $pretencaoSalarial;
	}

	public function getIdCurriculo(){
		return $this->idCurriculo;
	}

	public function setIdCurriculo($idCurriculo){
		$this->idCurriculo = $idCurriculo;
	}
	
}