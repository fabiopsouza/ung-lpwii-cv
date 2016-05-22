<?php 
	
class GenericRepository
{
	protected $connection;

	function __construct(){
		$this->connect();
	}
	
	function connect(){
		$this->connection = new PDO("mysql:host=localhost;dbname=curriculo", "root", "teste123");
	}
	
}