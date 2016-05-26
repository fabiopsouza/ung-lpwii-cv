<?php
require_once("..\\..\\resource\\LoadBundle.php");

$estadoCivilRep = new EstadoCivilRepository();
$response = $estadoCivilRep->get()->getData();
echo json_encode($response);