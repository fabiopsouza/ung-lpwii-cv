function getPostFormat(obj){
	var formatted = "";

	for(var name in obj){
		if(obj[name] != "")
			formatted += name + "=" + obj[name] + "&";
	}

	return formatted.substring(0, formatted.length - 1);
}