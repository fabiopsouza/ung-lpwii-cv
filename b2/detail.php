<?php require_once("resource\\LoadBundle.php");

$userRep = new UsuarioRepository();
$estadoCivilRep = new EstadoCivilRepository();

if(isset($_POST["nome"]) 
	&& isset($_POST["sexo"]) 
	&& isset($_POST["email"]) 
	&& isset($_POST["estadoCivil"])){

	$userRep->save(new Usuario($_GET["id"], $_POST["nome"], $_POST["sexo"], $_POST["email"], $_POST["estadoCivil"]));
header("location:/ung-lpwii-cv");
}

if(isset($_GET["id"])){
	$response = $userRep->getById($_GET["id"]);
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
			<?php
				if($response->getIsSuccess()){
					$user = $response->getData();

					?>

					<form id="frm" method="POST">
						<h1>Meus dados</h1> 
						<label for="nome">Nome</label>
						<input type="text" id="nome" placeholder="Digite seu nome..." required="required" name="nome" maxlength="255" value="<?php echo $user->getNome() ?>" />

						<label for="sexo">Sexo</label> 
						<input type="text" id="sexo" placeholder="Insira o sexo..." required="true" name="sexo" maxlength="1" value="<?php echo $user->getSexo() ?>" />
						
						<label for="email">E-Mail</label>
						<input type="email" id="email" placeholder="Digite seu email..." required="true" name="email" maxlength="255" value="<?php echo $user->getEmail() ?>" /> 

						<?php
							$response = $estadoCivilRep->get();

							if($response->getIsSuccess()){
						?>

						<label for="estadoCivil">Estado Civíl</label> 
						<select id="estadoCivil" name="estadoCivil"  required="true">
							<?php
							foreach ($response->getData() as $ec) {
								?>

								<option value="<?php echo $ec->getId() ?>" <?php echo ($ec->getId() == $user->getIdEstadoCivil() ? 'selected' : '') ?> >
									<?php echo  $ec->getDescricao() ?>
								</option>

								<?php
							}
							?>
						</select> 
						<input id="btn-salvar" type="submit" value="Salvar" />

						<?php

						}else{
							echo getErrorSpan($response->getErrorMessage());
						}

						?>
					</form>

					<?php
						}else{
							echo getErrorSpan($response->getErrorMessage());
						}
					?>

			<a href="/ung-lpwii-cv">Voltar</a>
		</div>
	</content>
</body>
</html>