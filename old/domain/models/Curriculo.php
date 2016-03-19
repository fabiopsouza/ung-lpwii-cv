<?php 

class Curriculo
{
	private $id;
	private $descricao;
	private $idUsuario;

	function __construct($id, $descricao, $idUsuario){
		$this->id = $id;
		$this->descricao = $descricao;
		$this->idUsuario = $idUsuario;
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

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
}