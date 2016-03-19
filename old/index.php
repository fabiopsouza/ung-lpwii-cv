<html>
<head>
	<title>LPWII - CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<content>

		<div class="panel panel-first">
			<h1>Meus dados</h1> 
			
			<label for="nome">Nome</label>
			<class="nome"> <input type="text" id="nome" placeholder="Digite seu nome" required="required" name="nome" />
			
			<label for="dataNascimento">Data de Nascimento</label> 
			<input id="dataNascimento" type="date" required="required" maxlength="10" name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2010-01-01" max="2017-02-18" /> 

			<label for="sexo">Sexo</label> 
			<select id="sexo"><option value="opcao">Escolha...</option>
				<option value="feminino">Feminino</option>
				<option value="masculino">Masculino</option>
			</select>
			<label for="email">E-Mail</label>
			<input type="email" id="email" placeholder="Digite seu email" name="email" /> 
			<label for="estadoCivil">Estado Civíl</label> 
			<select id="estadoCivil"><option value="opcao">Escolha...</option>
				<option value="solt">Solteiro(a)</option>
				<option value="casado">Casado(a)</option>
				<option value="divorc">Divorciado(a)</option>
				<option value="viuvo">Viúvo(a)</option>
				<option value="sep">Separado(a)</option>
				<option value="comp">Companheiro(a)</option>
			</select> 

			<label for="curriculo">Currículo</label> 	
			<input type="text" id="curriculo" placeholder="Nome do currículo" name="curriculo" />

			<label for="curriculo">Contatos</label>
			<table>
				<thead>
					<tr>
						<td>
							Número
						</td>
						<td>
							Tipo Contato
						</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">
							Nenhum registro
						</td>
					</tr>
				</tbody>
			</table>
			<div id="container-novo-tabela">
				<select>
					<option value="opcao">Tipo Contato</option>
					<option value="fix">Fixo</option>
					<option value="cel">Celular</option>
				</select> 
				<input type="tel" required="required" maxlength="15" name="phone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" /> 
				<button id="btn-adicionar-contato" class="to-right">Adicionar</button>
			</div>
		</div>

		<div class="panel">
			<h1>Endereço</h1> 
			<label for="uf">UF<label>
				<input list="uf"/>
				<datalist id="uf"> 
					<option value="AC"/> 
					<option value="AL"/>
					<option value="AM"/>
					<option value="AP"/> 
					<option value="BA"/>
					<option value="CE"/>
					<option value="DF"/>
					<option value="ES"/>
					<option value="GO"/>
					<option value="MA"/> 
					<option value="MT"/>
					<option value="MS"/> 
					<option value="MG"/>
					<option value="PA"/>
					<option value="PB"/> 
					<option value="PR"/>
					<option value="PE"/> 
					<option value="PI"/>
					<option value="RJ"/> 
					<option value="RN"/> 
					<option value="RO"/>
					<option value="RS"/>
					<option value="RR"/>
					<option value="SC"/>
					<option value="SE"/>
					<option value="SP"/> 
					<option value="TO"/>	
				</datalist>	

				<label for="municipio">Município<label>
					<input type="text" id="municipio"/> 

					<label for="bairro">Bairro</label>	
					<input type="text" id="bairro" min="0" max="5"/> 

					<label for="cep">CEP</label>
					<input name="cep" id="cep" required pattern= "\d{}-?\d{3}" />

					<label for="rua">Rua</label>
					<input type="text" id="rua" placeholder="Digite seu enderenço" required="required" name="enderenco" />

					<label for="numero">Número</label>	
					<input type="number" min="0" max="5"/>

					<label for="comp">Complemento</label>	
					<input type="name" min="0" max="5"/> 
				</div>

				<div class="panel">
					<h1>Objetivo</h1>
					<label for="descricaoObjetivo">Descrição</label> 
					<input id="descricaoObjetivo" type="text"></input>

					<label for="pretencao_salarial">Pretenção Salárial</label>	
					<input type="number" />
				</div>

				<div class="panel">
					<h1>Experiência</h1> 
					<label for="empresa">Empresa</label>
					<input type="text" id="empresa" required="required" name="empresa" /> 

					<label for="cargo">Cargo</label>
					<input type="text" id="cargo" required="required" name="cargo" /> 

					<label for="descricao_Experiência">Descrição</label> 	
					<textarea placeholder="Descreva as atividades"></textarea> 

					<label for="date">Data Início</label> 
					<input type="date" required="required" maxlength="10" name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2010-01-01" max="2017-02-18" />
					
					<label for="date">Data Fim</label> 
					<input type="date" required="required" maxlength="10" name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2010-01-01" max="2017-02-18" /> 	
				</div>

				<div class="panel">
					<h1>Cursos</h1> 

					<label for="curso">Nome</label> 
					<class="nome"> <input type="text" id="nome" placeholder="" required="required" name="nome" />
					
					<label for="instituicao">Instituição</label>
					<input type="text" id="instituicao" placeholder="" required="required" name="instituicao" />
					
					<label for="duracaoCurso">Duração</label>
					<input type="text" id="duracaoCurso" placeholder="Duração do curso (em meses)" required="required" name="duracaoCurso" />

					<table>
						<thead>
							<tr>
								<td>
									Nome
								</td>
								<td>
									Instituição
								</td>
								<td>
									Duração
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3">
									Nenhum registro
								</td>
							</tr>
						</tbody>
					</table>
					<div id="container-novo-tabela"> 
						<button id="btn-adicionar-curso" class="to-right">Adicionar</button>
					</div>
				</div>

			</content>
			<nav>
				<button id="btn-back" disabled="true" onclick="back()">Anterior</button>
				<button id="btn-next" class="to-right" onclick="next()">Próximo</button>
			</nav>


			<script src="js/api/panel.js"></script>
		</body>
		</html>