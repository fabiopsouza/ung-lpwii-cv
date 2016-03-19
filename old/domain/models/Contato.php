<?php

class Contato
{
	private $id;
	private $numero;
	private $idTipoContato;
	private $idCurriculo;

	function __construct($id, $numero, $idTipoContato, $idCurriculo){
		$this->id = $id;
		$this->numero = $numero;
		$this->idTipoContato = $idTipoContato;
		$this->idCurriculo = $idCurriculo;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getIdTipoContato(){
		return $this->idTipoContato;
	}

	public function setIdTipoContato($idTipoContato){
		$this->idTipoContato = $idTipoContato;
	}

	public function getIdCurriculo(){
		return $this->idCurriculo;
	}

	public function setIdCurriculo($idCurriculo){
		$this->idCurriculo = $idCurriculo;
	}
	
}