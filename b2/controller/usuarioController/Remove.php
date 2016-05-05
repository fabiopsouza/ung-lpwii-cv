<?php

try{
	
	require_once("..\\..\\resource\\LoadBundle.php");
	
	$userRep = new UsuarioRepository();
	$response = $userRep->remove($_POST["id"]);
	echo $response->getIsSuccess();

} catch(Exception $e){
	echo $e;
}