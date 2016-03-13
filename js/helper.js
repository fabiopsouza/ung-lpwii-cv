//"nome="+nome+"&"+"dataNascimento="+dataNascimento+"&"+"sexo="+sexo+"&"+"email="+email+"&"+"estadoCivil="+estadoCivil;

function getPostFormat(array){
	debugger;
	var formatted = "";

	for(var i=0; i<array.length; i++){
		formatted += getParameterName(array[i]);
	}		

	return formatted;
}

function getParameterName(value){
  for (var name in window){
	if (window[name]==value)
    	return(name);
  }
  return("");
}