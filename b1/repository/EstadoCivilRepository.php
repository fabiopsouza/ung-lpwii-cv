<?php

class EstadoCivilRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		$query = "SELECT id, descricao FROM estado_civil";
		$result = mysqli_query(parent::getConnection(), $query);
		
		$list = [];			
		while($item = mysqli_fetch_assoc($result))
			array_push($list, new EstadoCivil($item["id"], $item["descricao"]));
		return $list;
		parent::closeConnection();
	}
}