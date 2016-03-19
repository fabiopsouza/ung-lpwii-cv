<?php require_once("resource\\LoadBundle.php");

$userRep = new UsuarioRepository();
$estadoCivilRep = new EstadoCivilRepository();

if(isset($_POST["nome"]) 
	&& isset($_POST["sexo"]) 
	&& isset($_POST["email"]) 
	&& isset($_POST["estadoCivil"])){

	$userRep->save(new Usuario(null, $_POST["nome"], $_POST["sexo"], $_POST["email"], $_POST["estadoCivil"]));
	header("location:/ung-lpwii-cv");
}


?>
<html>
<head>
	<title>LPWII - CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<content>
		<div class="panel panel-first">
			<form id="frm" method="POST">
				<h1>Meus dados</h1> 
				<label for="nome">Nome</label>
				<input type="text" id="nome" placeholder="Digite seu nome..." required="required" name="nome" maxlength="255" autofocus />

				<label for="sexo">Sexo</label> 
				<input type="text" id="sexo" placeholder="Insira o sexo..." required="true" name="sexo" maxlength="1" />
				
				<label for="email">E-Mail</label>
				<input type="email" id="email" placeholder="Digite seu email..." maxlength="255" required="true" name="email" /> 

				<label for="estadoCivil">Estado Civíl</label> 
				<select id="estadoCivil" name="estadoCivil" required="true">
					<?php
					foreach ($estadoCivilRep->get() as $ec) {
						?>

						<option value="<?php echo $ec->getId() ?>">
							<?php echo  $ec->getDescricao() ?>
						</option>

						<?php
					}
					?>
				</select> 

				<input id="btn-salvar" type="submit" value="Salvar" />
			</form>
			<a href="/ung-lpwii-cv">Voltar</a>
		</div>
	</content>
</body>
</html>