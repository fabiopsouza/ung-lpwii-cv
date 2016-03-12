<?php require_once("resource\\LoadBundle.php") ?>

<html>
<head>
	<title>LPWII - CV</title>
</head>
<body>

	<form id="criarUsuario">
		<label for="nome">Nome</label>
		<input type="text" id="nome" />

		<label for="dataNascimento">Data de Nascimento</label>
		<input type="text" id="dataNascimento"/>

		<label for="sexo">Sexo</label>
		<input type="text" id="sexo" />

		<label for="email">E-mail</label>
		<input type="text" id="email" />

		<label for="estadoCivil">Estado Civíl</label>
		<input type="text" id="estadoCivil" />		

		<input type="submit" value="Enviar" onclick="criarUsuario(event)" />
	</form>
	<div id="status"></div>

	<script type="text/javascript" src="js\ajax.js"></script>
	<script type="text/javascript" src="js\url.js"></script>
	<script type="text/javascript">
		function criarUsuario(e){
			e.preventDefault();

		    var nome = document.getElementById("nome").value;
		    var dataNascimento = document.getElementById("dataNascimento").value;
		    var sexo = document.getElementById("sexo").value;
		    var email = document.getElementById("email").value;
		    var estadoCivil = document.getElementById("estadoCivil").value;

		    //CRIAR
		    //var data = "nome="+nome+"&"+"dataNascimento="+dataNascimento+"&"+"sexo="+sexo+"&"+"email="+email+"&"+"estadoCivil="+estadoCivil;
		    //post(getUsuarioSavePath(), data, function(response){
		    //	document.getElementById("status").innerHTML = response;
		    //});		

		    //LISTAR
		    get(getUsuarioGetPath(), null, function(response){		    
		    	document.getElementById("status").innerHTML = response;
		    });
		}


	</script>

	<?php		
		$userRep = new UsuarioRepository();
		
		// Teste Get()
		echo "Teste Get():</br>";
		foreach ($userRep->get() as $user) {
			echo "</br>Id: " . $user->getId() . " Nome: " . $user->getNome() . " Data Nascimento: " . $user->getDataNascimento() . 
				" Sexo" . $user->getSexo() . " E-mail: " . $user->getEmail() . " Estado Civíl: " . $user->getEstadoCivil();
		}

		//Teste GetById()
		echo "</br></br>Teste GetById():</br>";
		$user = $userRep->getById(1);
		echo "</br>Id: " . $user->getId() . " Nome: " . $user->getNome() . " Data Nascimento: " . $user->getDataNascimento() . 
				" Sexo" . $user->getSexo() . " E-mail: " . $user->getEmail() . " Estado Civíl: " . $user->getEstadoCivil();

		//Teste Create()
		echo "</br></br>Teste Create():</br>";
		$user2 = new Usuario(null, "teste", "2008-02-10", "f", "teste@mail.com", "solteiro");
		//echo $userRep->save($user2) ? "</br>criado com sucesso!" : "</br>houve um erro ao criar!";

		//Teste Update()
		echo "</br></br>Teste Update():</br>";
		$user3 = new Usuario(2, "teste", "2008-02-10", "f", "teste@mail.com", "solteiro");
		//echo $userRep->save($user3) ? "</br>alterado com sucesso!" : "</br>houve um erro ao alterar!";

		//Teste Remove()
		echo "</br></br>Teste Remove():</br>";
		//echo $userRep->remove(2) ? "Removido com sucesso!" : "Houve um erro ao remover!";
	?>

</body>
</html>