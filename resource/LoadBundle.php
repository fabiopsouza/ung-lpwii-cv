<?php
	
	spl_autoload_register("loadResources");

	function loadResources($className){
		$modelsPath = "domain\\models\\" . $className . ".php";
		$repositoryPath = "repository\\" . $className .  ".php";

		if(file_exists($modelsPath)){
			require_once($modelsPath);	
		}else if(file_exists($repositoryPath)){
			require_once($repositoryPath);	
		}
	}

?>