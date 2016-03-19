<?php 

class Curso
{
	private $id;
	private $nome;
	private $instituicao;
	private $mesesDuracao;
	private $idTipoCurso;
	private $idCurriculo;

	function __construct($id, $nome, $instituicao, $mesesDuracao, $idTipoCurso, $idCurriculo){
		$this->id = $id;
		$this->nome = $nome;
		$this->instituicao = $instituicao;
		$this->mesesDuracao = $mesesDuracao;
		$this->idTipoCurso = $idTipoCurso;
		$this->idCurriculo = $idCurriculo;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getInstituicao(){
		return $this->instituicao;
	}

	public function setInstituicao($instituicao){
		$this->instituicao = $instituicao;
	}

	public function getMesesDuracao(){
		return $this->mesesDuracao;
	}

	public function setMesesDuracao($mesesDuracao){
		$this->mesesDuracao = $mesesDuracao;
	}

	public function getIdTipoCurso(){
		return $this->idTipoCurso;
	}

	public function setIdTipoCurso($idTipoCurso){
		$this->idTipoCurso = $idTipoCurso;
	}

	public function getIdCurriculo(){
		return $this->idCurriculo;
	}

	public function setIdCurriculo($idCurriculo){
		$this->idCurriculo = $idCurriculo;
	}
}