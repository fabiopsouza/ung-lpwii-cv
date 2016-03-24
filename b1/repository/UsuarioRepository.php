<?php

class UsuarioRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		
		try{

			$query = "SELECT id, nome, sexo, email, id_estado_civil FROM usuario";
			$result = mysqli_query(parent::getConnection(), $query);
			
			$list = [];			
			while($item = mysqli_fetch_assoc($result))
				array_push($list, new Usuario($item["id"], $item["nome"], $item["sexo"], $item["email"],$item["id_estado_civil"]));
			
			return new Response(true, null, $list);
		}
		catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar!", null);
		}

		parent::closeConnection();	
	}

	function getById($id){
		try{
			$query = "SELECT id, nome, sexo, email, id_estado_civil FROM usuario WHERE id = " . $id;
			$result = mysqli_query(parent::getConnection(), $query);
			
			$item = mysqli_fetch_assoc($result);

			return new Response(true, null, new Usuario($item["id"], $item["nome"], $item["sexo"], $item["email"],$item["id_estado_civil"]));
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar!", null);
		}

		parent::closeConnection();
	}

	function save($item){
		
		try{
			if($item->getId() == null){ //insersão
				$query = "INSERT INTO usuario(nome, sexo, email, id_estado_civil) 
					  	  	VALUES('{$item->getNome()}', '{$item->getSexo()}', '{$item->getEmail()}', '{$item->getIdEstadoCivil()}')";
			}else{ //alteração
				$query = "UPDATE usuario SET nome = '{$item->getNome()}', sexo = '{$item->getSexo()}', email = '{$item->getEmail()}', id_estado_civil = '{$item->getIdEstadoCivil()}'
				 			WHERE id = {$item->getId()}";
			}

			if(!mysqli_query(parent::getConnection(), $query))
				throw new Exception();	

			return new Response(true, null, null);	
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao salvar!", null);
		}

	  	parent::closeConnection();
	}

	function remove($id){
		
		try{
			$query = "DELETE FROM usuario WHERE id = " . $id;
			
			if(!mysqli_query(parent::getConnection(), $query))
				throw new Exception();	

			return new Response(true, null, null);	
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao salvar!", null);
		}

		parent::closeConnection();
	}
}