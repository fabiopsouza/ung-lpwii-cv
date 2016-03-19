<?php

class UsuarioRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		$query = "SELECT id, nome, sexo, email, id_estado_civil FROM usuario";
		$result = mysqli_query(parent::getConnection(), $query);
		
		$list = [];			
		while($item = mysqli_fetch_assoc($result))
			array_push($list, new Usuario($item["id"], $item["nome"], $item["sexo"], $item["email"],$item["id_estado_civil"]));
		return $list;
		parent::closeConnection();
	}

	function getById($id){
		$query = "SELECT id, nome, sexo, email, id_estado_civil FROM usuario WHERE id = " . $id;
		$result = mysqli_query(parent::getConnection(), $query);
		
		$item = mysqli_fetch_assoc($result);

		return new Usuario($item["id"], $item["nome"], $item["sexo"], $item["email"],$item["id_estado_civil"]);
		parent::closeConnection();
	}

	function save($item){
		if($item->getId() == null){ //insersão
			$query = "INSERT INTO usuario(nome, sexo, email, id_estado_civil) 
				  	  	VALUES('{$item->getNome()}', '{$item->getSexo()}', '{$item->getEmail()}', '{$item->getIdEstadoCivil()}')";
		}else{ //alteração
			$query = "UPDATE usuario SET nome = '{$item->getNome()}', sexo = '{$item->getSexo()}', email = '{$item->getEmail()}', id_estado_civil = '{$item->getIdEstadoCivil()}'
			 			WHERE id = {$item->getId()}";
		}

	  	return mysqli_query(parent::getConnection(), $query);
	  	parent::closeConnection();
	}

	function remove($id){
		$query = "DELETE FROM usuario WHERE id = " . $id;
		return mysqli_query(parent::getConnection(), $query);	
		parent::closeConnection();
	}
}