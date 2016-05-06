<?php
require_once("..\\..\\resource\\LoadBundle.php");

$userRep = new UsuarioRepository();
echo $userRep->remove($_POST["id"]);