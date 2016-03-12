function post(url, data, onSuccess, onError){

    var request = new XMLHttpRequest();
	request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.onreadystatechange = function() {
	    if(request.readyState == 4 && request.status == 200) {
	    	if(typeof onSuccess == 'function')	
				onSuccess(request.responseText);
	    }else{
	    	if(typeof onError == 'function')
	    		onError(response);
	    	else
	    		globalError(response);
	    }
    }

    request.send(data);
    document.getElementById("status").innerHTML = "processing...";
}

function get(url, data, onSuccess, onError){

    var request = new XMLHttpRequest();
	request.open("GET", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.onreadystatechange = function() {
	    if(request.readyState == 4 && request.status == 200) {
	    	if(typeof onSuccess == 'function')	
				onSuccess(request.responseText);
	    }else{
	    	if(typeof onError == 'function')
	    		onError(response);
	    	else
	    		globalError(response);
	    }
    }

    request.send(data);
    document.getElementById("status").innerHTML = "processing...";
}

function globalError(response){
	console.log(response);
}