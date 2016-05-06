<?php
require_once("..\\..\\resource\\LoadBundle.php");

$userRep = new UsuarioRepository();
$id = isset($_POST["id"]) ? $_POST["id"] : null; //create : update
$item = new Usuario($id, $_POST["nome"], $_POST["sexo"], $_POST["email"], $_POST["estadoCivil"]);

echo $userRep->save($item);