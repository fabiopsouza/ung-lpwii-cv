<html>
<head>
	<title>LPWII - CV</title>

	<style type="text/css">
		.panel{
			display: none;
			width: 500px; 
			height: 200px;
		}

		.panel-first{
			display: block;
		}

	</style>
</head>
<body>
	<div class="panel panel-first" style="background-color: red;">
		
	</div>

	<div class="panel" style="background-color: blue;">

	</div>

	<div class="panel" style="background-color: black;">

	</div>

	<button id="btn-back" disabled="true" onclick="back()">Anterior</button>
	<button id="btn-next" onclick="next()">Próximo</button>
	
	<script src="js/api/panel.js"></script>
</body>
</html>