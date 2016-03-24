<?php
require_once("ErrorHandler.php");

spl_autoload_register("loadResources");
set_error_handler("ErrorHandler");

function loadResources($className){
	$models = "domain\\models\\" . $className . ".php";
	$modelsInnerTwo = "..\\..\\domain\\models\\" . $className . ".php";

	$repository = "repository\\" . $className .  ".php";
	$repositoryInnerTwo = "..\\..\\repository\\" . $className .  ".php";

	$controller = "controller\\" . $className . ".php";

	if(file_exists($models)){
		require_once($models);	
	}
	else if(file_exists($modelsInnerTwo)){
		require_once($modelsInnerTwo);	
	}
	else if(file_exists($repository)){
		require_once($repository);	
	}
	else if(file_exists($repositoryInnerTwo)){
		require_once($repositoryInnerTwo);
	}
	else if(file_exists($controller)){
		require_once($controller);
	}
}

function getErrorSpan($error){
	return "<span style=\"color: red; font-weight: 600\">". $error ."</span>";
}