function back(){
	var enabledIndex = getPanelEnabledIndex();
	changeEnabled(enabledIndex - 1);
}

function next(){
	var enabledIndex = getPanelEnabledIndex();
	changeEnabled(enabledIndex + 1);
}

function getPanelEnabledIndex(){
	var panels = document.getElementsByClassName("panel");
	for(i=0; i<panels.length; i++){
		if(panels[i].style.display != "none")
			return i;
	}
}

function changeEnabled(index){
	var panels = document.getElementsByClassName("panel");

	if(panels.length < 2)
		return;

	if(index == 0){ //primeiro
		if(panels[index])
			panels[index].style.display = "block";	
		if(panels[index + 1])
			panels[index + 1].style.display = "none";

		document.getElementById("btn-back").disabled = true;

		if(panels.length == 2)
			document.getElementById("btn-next").disabled = false;
	}else if(index == panels.length - 1){ //ultimo
		if(panels[index])
			panels[index].style.display = "block";	
		if(panels[index - 1])
			panels[index - 1].style.display = "none";

		document.getElementById("btn-next").disabled = true;

		if(panels.length == 2)
			document.getElementById("btn-back").disabled = false;
	}else{ //meio
		if(panels[index])
			panels[index].style.display = "block";	
		if(panels[index + 1])
			panels[index + 1].style.display = "none";
		if(panels[index - 1])
			panels[index - 1].style.display = "none";

		document.getElementById("btn-next").disabled = false;
		document.getElementById("btn-back").disabled = false;
	}
}