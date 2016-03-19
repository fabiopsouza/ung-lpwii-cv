<?php require_once("resource\\LoadBundle.php");
$userRep = new UsuarioRepository();

if(isset($_GET["idExcluir"])){
	$userRep->remove($_GET["idExcluir"]);
}

?>
<html>
<head>
	<title>LPWII - CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<content>
		<div>
			<a href="/ung-lpwii-cv/new.php" class="to-right">Novo</a>
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
				foreach ($userRep->get() as $user) {
					?>
					<tr>
						<td><?php echo $user->getNome() ?></td>
						<td><?php echo $user->getSexo() ?></td>
						<td><?php echo $user->getEmail() ?></td>
						<td>
							<a href="/ung-lpwii-cv/detail.php?id=<?php echo $user->getId() ?>">Editar</a>
						</td>
						<td>
							<a href="/ung-lpwii-cv/index.php?idExcluir=<?php echo $user->getId() ?>">Excluir</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tr>
		</tbody>
	</table>
</content>
</body>
</html>