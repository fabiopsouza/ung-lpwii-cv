<?php
require_once("..\\..\\resource\\LoadBundle.php");

$userRep = new UsuarioRepository();

if(isset($_POST["id"])){ //Get By Id
	echo json_encode($userRep->getById($_POST["id"]));
}
else{ //Get all
	echo json_encode($userRep->get()->getData());
}