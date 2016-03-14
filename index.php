<html>
<head>
	<title>LPWII - CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<content>

		<div class="panel panel-first" style="background-color: red;">

		</div>

		<div class="panel" style="background-color: black;">

		</div>

		<div class="panel" style="background-color: yellow;">

		</div>

	</content>
	<nav>
		<button onclick="teste()">teste</button>
		<button id="btn-back" disabled="true" onclick="back()">Anterior</button>
		<button id="btn-next" class="to-right" onclick="next()">Próximo</button>
	</nav>


	<script src="js/api/panel.js"></script>
	<script src="js/helper.js"></script>
	<script>
		function teste(){
			var prop1 = "value1";
			var prop2 = "value2";
			var prop3 = "value3";

			var array = [prop1,prop2,prop3];
			
			console.log(getPostFormat(array));
		}
	</script>
</body>
</html>