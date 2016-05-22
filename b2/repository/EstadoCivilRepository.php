<?php

class EstadoCivilRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		
		try{
			$result = $this->connection->query("SELECT id, descricao FROM estado_civil");
			
			$list = [];
			while ($item = $result->fetch(PDO::FETCH_OBJ))
				array_push($list, new EstadoCivil($item->id, $item->descricao));

			return new Response(true, null, $list);
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar Estado Civil!", null);
		}
	}
}