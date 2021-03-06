window.readyHandlers = [];
window.ready = function ready(handler) {
	window.readyHandlers.push(handler);
	handleState();
};

window.handleState = function handleState () {
	if (['interactive', 'complete'].indexOf(document.readyState) > -1) {
		while(window.readyHandlers.length > 0) {
			(window.readyHandlers.shift())();
		}
	}
};

document.onreadystatechange = window.handleState;

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

	var tmpNome = '';
	var tmpSobreNome = '';

	if(getRandomValue(2) == 1)
		tmpNome = nomesUnisex[getRandomValue(nomesUnisex.length - 1)] + (getRandomValue(2) == 1 ? 'a' : 'o');
	else
		tmpNome = nomes[getRandomValue(getRandomValue.length - 1)];

	tmpSobreNome = sobreNomes[getRandomValue(sobreNomes.length - 1)];

	document.getElementById("nome").value = tmpNome + ' ' + tmpSobreNome;
	
	if(getRandomValue(2) == 1){
		document.getElementById("masculino").checked = true;
		document.getElementById("feminino").checked = false;
	}else{
		document.getElementById("masculino").checked = false;
		document.getElementById("feminino").checked = true;
	}

	document.getElementById("email").value = (tmpNome + '.' + tmpSobreNome).toLowerCase() + '@email.com';
	document.getElementById("estadoCivil").value = getRandomValue(3);		
}

function getRandomValue(maxValue){
	return Math.floor(Math.random() * maxValue + 1);
}

function hideStatus(){
	document.getElementById("status").style.display = 'none';
}

function clearFields(){
	document.getElementById("codigo").value = "";
	document.getElementById("masculino").checked = false;
	document.getElementById("feminino").checked = false;
	document.getElementById("nome").value = "";
	document.getElementById("email").value = "";
	document.getElementById("estadoCivil").value = 1;

}

function clearUserTable(){
	var table = document.getElementById("usuarios-table");
	
	while(table.rows.length > 1)
		table.deleteRow(1);
}