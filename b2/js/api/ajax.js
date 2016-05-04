function post(url, data, onSuccess, onError){

	console.log(url);

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
	    		globalError(request.readyState, request.status);
	    }
    }

    request.send(data);
    document.getElementById("status").style.display = 'block';
}

function globalError(state, status){
	console.log('readyState: ' + state + ' - status:' + status);
}