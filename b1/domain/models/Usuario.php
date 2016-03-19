<?php 

class Usuario
{
	private $id;
	private $nome;
	private $sexo;
	private $email;
	private $idEstadoCivil;

	function __construct($id, $nome, $sexo, $email, $idEstadoCivil){
		$this->id = $id;
		$this->nome = $nome;
		$this->sexo = $sexo;
		$this->email = $email;
		$this->idEstadoCivil = $idEstadoCivil;
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

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getIdEstadoCivil(){
		return $this->idEstadoCivil;
	}

	public function setIdEstadoCivil($idEstadoCivil){
		$this->idEstadoCivil = $idEstadoCivil;
	}
}