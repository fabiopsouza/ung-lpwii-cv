<?php
	
spl_autoload_register("loadResources");

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