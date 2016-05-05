function getPostFormat(obj){
	var formatted = "";

	for(var name in obj){
		if(obj[name] != "")
			formatted += name + "=" + obj[name] + "&";
	}

	return formatted.substring(0, formatted.length - 1);
}

function generateData(){

		var nomesUnisex = ['Fabi','Paul','Brun','Sandr','Juli','Renat','Adrian','Fabian','Alexandr','Antoni','August','Laur','Felip'];

		var nomes = ['Ingrid','Joao','Max','Priscila','Maria','Junior','Marcos','Marinalva','Lais','Pedro','Joel','Rafael','Jonatas','Katia','Rafaela','Ricardo','Cintia','Clarice','Guilherme','Sara','Erick','Erica','Wesley','Lucas','Matheus'];

		var sobreNomes = ['Filho','Neto','Souza','Azevedo','Dutra','Pereira','Ferreira','Mota','Oliveira','Pinto','Silveira','Santos','Silva','Lima','Lobos','Barreto','Tavares','Lins','Porto','Rego','Siqueira','Nogueira','Vieira','Meireles'];

		var nome = document.getElementById("nome");
		var tmpNome = '';
		var tmpSobreNome = '';

		if(getRandomValue(2) == 1)
			tmpNome = nomesUnisex[getRandomValue(nomesUnisex.length - 1)] + (getRandomValue(2) == 1 ? 'a' : 'o');
		else
			tmpNome = nomes[getRandomValue(getRandomValue.length - 1)];

		tmpSobreNome = sobreNomes[getRandomValue(sobreNomes.length - 1)];

		nome.value = tmpNome + ' ' + tmpSobreNome;

		document.getElementById("sexo").value = (getRandomValue(2) == 1 ? 'M' : 'F');
		document.getElementById("email").value = (tmpNome + '.' + tmpSobreNome).toLowerCase() + '@email.com';
		document.getElementById("estadoCivil").value = getRandomValue(3);		
	}

function getRandomValue(maxValue){
	return Math.floor(Math.random() * maxValue + 1);
}

function clearFilds(){
	document.getElementById("nome").value = "";
	document.getElementById("sexo").value = "";
	document.getElementById("email").value = "";
	document.getElementById("estadoCivil").value = 1;
}

function hideStatus(){
	document.getElementById("status").style.display = 'none';
}

