<?php
require_once("..\\..\\resource\\LoadBundle.php");

$userRep = new UsuarioRepository();

$item = $userRep->getById(1);

echo $item->getName();