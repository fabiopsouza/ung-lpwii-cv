<?php require_once("resource\\LoadBundle.php") ?>

<html>
<head>
	<title>LPWII - CV</title>
</head>
<body>

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
		echo $userRep->save($user2) ? "</br>criado com sucesso!" : "</br>houve um erro ao criar!";

		//Teste Update()
		echo "</br></br>Teste Update():</br>";
		$user3 = new Usuario(2, "teste", "2008-02-10", "f", "teste@mail.com", "solteiro");
		echo $userRep->save($user3) ? "</br>alterado com sucesso!" : "</br>houve um erro ao alterar!";

		//Teste Remove()
		echo "</br></br>Teste Remove():</br>";
		echo $userRep->remove(2) ? "Removido com sucesso!" : "Houve um erro ao remover!";
	?>

</body>
</html>