<?php

class UsuarioRepository extends GenericRepository
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get(){
		
		try{
			$result = $this->connection->query("SELECT id, nome, sexo, email, id_estado_civil FROM usuario");
			
			$list = [];			
			while ($item = $result->fetch(PDO::FETCH_OBJ))
				array_push($list, new Usuario($item->id, $item->nome, $item->sexo, $item->email,$item->id_estado_civil));
			
			return new Response(true, null, $list);
		}
		catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar!", null);
		}
	}
	
	function getById($id){
		try{
			$result = $this->connection->query("SELECT id, nome, sexo, email, id_estado_civil FROM usuario WHERE id = " . $id);
			
			$item = $result->fetch(PDO::FETCH_OBJ);

			return new Response(true, null, new Usuario($item->id, $item->nome, $item->sexo, $item->email,$item->id_estado_civil));
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao listar!", null);
		}
	}
	
	function save($item){
		
		try{
			$id = $item->getId();
			$nome = $item->getNome();
			$sexo = $item->getSexo();
			$email = $item->getEmail();
			$id_estado_civil = $item->getIdEstadoCivil();

			$sql = $id == null ? "INSERT INTO usuario(nome, sexo, email, id_estado_civil) VALUES(?,?,?,?)" : 
								 "UPDATE usuario SET nome=?, sexo=?, email=?, id_estado_civil=? WHERE id=?";

			$query = $this->connection->prepare($sql);
			$query->bindParam(1,$nome);
			$query->bindParam(2,$sexo);
			$query->bindParam(3,$email);
			$query->bindParam(4,$id_estado_civil);

			if($id != null)
				$query->bindParam(5,$id);

			$query->execute();

			return new Response(true, null, null);	
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao salvar!", null);
		}
	}
	
	function remove($id){
		
		try{
			$query = $this->connection->prepare("DELETE FROM usuario WHERE id=?");
			
			$query->bindParam(1, $id);
			$query->execute();
			
			return new Response(true, null, null);
		}catch(Exception $e){
			return new Response(false, "Falha: Houve um erro ao remover!", null);
		}
	}
}