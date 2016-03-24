<?php 
	require_once("resource\\LoadBundle.php");
	
	class GenericRepository
	{
		private $connection;

		private $server = "localhost";
		private $user = "root";
		private $password = "teste123";
		private $schema = "curriculo";

		function __construct(){
			
		}

		function getConnection(){
			return $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->schema);
		}

		function closeConnection(){
			return mysql_close($this->connection);
		}
	}

?>