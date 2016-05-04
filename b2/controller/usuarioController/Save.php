<?php

try{
	require_once("..\\..\\resource\\LoadBundle.php");

	$userRep = new UsuarioRepository();	

	$id = isset($_POST["id"]) ? $_POST["id"] : null; //create : update
	$item = new Usuario($id, $_POST["nome"], $_POST["sexo"], $_POST["email"], $_POST["estadoCivil"]);

	$response = $userRep->save($item);
	echo $response->getIsSuccess();

} catch(Exception $e){
	echo $e;
}