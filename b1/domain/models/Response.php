<?php

class Response
{
	private $isSuccess;
	private $errorMessage;
	private $data;

	function __construct($isSuccess, $errorMessage, $data){
		$this->isSuccess = $isSuccess;
		$this->errorMessage = $errorMessage;
		$this->data = $data;
	}

	public function getIsSuccess(){
		return $this->isSuccess;
	}

	public function setIsSuccess($isSuccess){
		$this->isSuccess = $isSuccess;
	}

	public function getErrorMessage(){
		return $this->errorMessage;
	}

	public function setErrorMessage($errorMessage){
		$this->errorMessage = $errorMessage;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}
}