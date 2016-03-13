<?php 

class Usuario implements JsonSerializable
{
	private $id;
	private $nome;
	private $dataNascimento;
	private $sexo;
	private $email;
	private $estadoCivil;

	function __construct($id, $nome, $dataNascimento, $sexo, $email, $estadoCivil){
		$this->id = $id;
		$this->nome = $nome;
		$this->dataNascimento = $dataNascimento;
		$this->sexo = $sexo;
		$this->email = $email;
		$this->estadoCivil = $estadoCivil;
	}

	public function jsonSerialize () {
        return array(
            'id'=>$this->id,
            'nome'=>$this->nome,
            'dataNascimento'=>$this->dataNascimento,
            'sexo'=>$this->sexo,
            'email'=>$this->email,
            'estadoCivil'=>$this->estadoCivil
        );
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

	public function getDataNascimento(){
		return $this->dataNascimento;
	}

	public function setDataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
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

	public function getEstadoCivil(){
		return $this->estadoCivil;
	}

	public function setEstadoCivil($estadoCivil){
		$this->estadoCivil = $estadoCivil;
	}
}