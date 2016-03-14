<?php 

class Endereco
{
	private $id;
	private $uf;
	private $municipio;
	private $bairro;
	private $cep;
	private $rua;
	private $numero;
	private $complemento;
	private $idCurriculo;

	function __construct($id, $uf, $municipio, $bairro, $cep, $rua, $numero, $complemento, $idCurriculo){
		$this->id = $id;
		$this->uf = $uf;
		$this->municipio = $municipio;
		$this->bairro = $bairro;
		$this->cep = $cep;
		$this->rua = $rua;
		$this->numero = $numero;
		$this->numero = $complemento;
		$this->numero = $idCurriculo;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($uf){
		$this->uf = $uf;
	}

	public function getMunicipio(){
		return $this->municipio;
	}

	public function setMunicipio($municipio){
		$this->municipio = $municipio;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getRua(){
		return $this->rua;
	}

	public function setRua($rua){
		$this->rua = $rua;
	}
	
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
	
	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}
	
	public function getIdCurriculo(){
		return $this->idCurriculo;
	}

	public function setIdCurriculo($idCurriculo){
		$this->idCurriculo = $idCurriculo;
	}
	
}