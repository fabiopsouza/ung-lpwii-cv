<?php

class EstadoCivilRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		
		try{
			$query = "SELECT id, descricao FROM estado_civil";
			$result = mysqli_query(parent::getConnection(), $query);
			
			$list = [];			
			while($item = mysqli_fetch_assoc($result))
				array_push($list, new EstadoCivil($item["id"], $item["descricao"]));

			return new Response(true, null, $list);
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar Estado Civil!", null);
		}

		parent::closeConnection();
	}
}