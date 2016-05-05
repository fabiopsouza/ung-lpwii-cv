<?php require_once("resource\\LoadBundle.php");
$userRep = new UsuarioRepository();
$estadoCivilRep = new EstadoCivilRepository();
?>
<html>
<head>
	<title>LPWII - CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<img id="status" style="position: fixed; right:20px; bottom: 20px; display: none" src="img/loading.gif">
	
	<content>


		<div class="panel panel-first">

			<div>
				<button id="btn-next" onclick="next()" class="to-right">Novo</button>
			</div>
			<table>
				<thead>
					<tr>
						<td>Nome</td>
						<td>Sexo</td>
						<td>E-mail</td>
						<td colspan="2">Ações</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$response = $userRep->get();

					if($response->getIsSuccess()){
						foreach ($response->getData() as $user) {
							?>
							<tr>
								<td><?php echo $user->getNome() ?></td>
								<td><?php echo $user->getSexo() ?></td>
								<td><?php echo $user->getEmail() ?></td>
								<td>
									<a href="/ung-lpwii-cv/detail.php?id=<?php echo $user->getId() ?>">Editar</a>
								</td>
								<td>
									<a href="" onclick="deleteUser(event, <?php echo $user->getId() ?>)">Excluir</a>
								</td>
							</tr>
							<?php
						}
					}else{
						echo getErrorSpan($response->getErrorMessage());
					}
					?>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="panel">
		<button onclick="generateData()" class="to-right">Preencher formulário</button>
		<form id="frm" method="POST">
			<h1>Meus dados</h1> 
			<label for="nome">Nome</label>
			<input type="text" id="nome" placeholder="Digite seu nome..." required="required" name="nome" maxlength="255" autofocus />

			<label for="sexo">Sexo</label> 
			<input type="text" id="sexo" placeholder="Insira o sexo..." required="true" name="sexo" maxlength="1" />

			<label for="email">E-Mail</label>
			<input type="email" id="email" placeholder="Digite seu email..." maxlength="255" required="true" name="email" /> 

			<?php
			$response = $estadoCivilRep->get();

			if($response->getIsSuccess()){
				?>
				<label for="estadoCivil">Estado Civíl</label> 
				<select id="estadoCivil" name="estadoCivil" required="true">


					<?php
					foreach ($response->getData() as $ec) {
						?>

						<option value="<?php echo $ec->getId() ?>">
							<?php echo  $ec->getDescricao() ?>
						</option>

						<?php
					}	
					
					?>
				</select> 
				<input id="btn-salvar" type="submit" value="Salvar" onclick="saveUser(event)" />

				<?php
			}else{
				echo getErrorSpan($response->getErrorMessage());
			}
			?>
		</form>

		<button id="btn-back" disabled="true" onclick="back()">Voltar</button>
		<button onclick="clearFilds()">Limpar</button>
	</div>

</content>

<script src="js/api/panel.js"></script>
<script src="js/helper.js"></script>
<script src="js/url.js"></script>
<script src="js/api/ajax.js"></script>
<script>
	function saveUser(e){
		e.preventDefault();

		var nome = document.getElementById("nome").value;
		var sexo = document.getElementById("sexo").value;
		var email = document.getElementById("email").value;
		var estadoCivil = document.getElementById("estadoCivil").value;

		var data = getPostFormat({
			nome:nome, 
			sexo:sexo,
			email:email,
			estadoCivil:estadoCivil
		});

		post('controller\\usuarioController\\Save.php', data, function(response){
			clearFilds();
			hideStatus();
		});
	}

	function deleteUser(e, id){
		e.preventDefault();
		post('controller\\usuarioController\\Remove.php', getPostFormat({id:id}) ,function(response){
			hideStatus();
		});
	}

	

	
</script>
</body>
</html>