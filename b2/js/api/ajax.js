function post(url, data, onSuccess, onError){

    var request;

    if(window.XMLHttpRequest){
		request = new XMLHttpRequest();
	}else if(window.ActiveXObject){
		request = new ActiveXObject("Msxml2.XMLHTTP");

		if(!request){
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}

	if(!request)
		return;

	request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.onreadystatechange = function() {
	    if(request.readyState == 4 && request.status == 200) {
	    	console.log('readyState: ' + request.readyState + ' - status:' + request.status);
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