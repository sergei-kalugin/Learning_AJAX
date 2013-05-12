
			var xmlhttp;
			function showHint (str) {
				if (str.length==0) {
					 document.getElementById('txt1').innerHTML="";
			  		 return;
				}
			 	xmlhttp = GetXmlHttpObject();
			 	if (xmlhttp==null) {
			 		alert ("Sorry, your browser doesn't support XMLHTTP!");
			 		return;
			 	}
			 	var url = "get-hint.php";
			 	url = url + "?q=" + str; //
			 	url = url + "&sid=" + Math.random(); //I don't want caching 
			 	xmlhttp.onreadystatechange = stateChanged;
			 	xmlhttp.open("GET", url, true);
			 	xmlhttp.send(null);
			}
			
			function GetXmlHttpObject () {
			  if (window.XMLHttpRequest) {
			  	return new XMLHttpRequest();
			  }
			  if (window.ActiveXObject) {
			  	return new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  return null;
			}
			
			function stateChanged () {
			  if (xmlhttp.readyState == 4) {
			  	document.getElementById('txt-hint').innerHTML=xmlhttp.responseText;
			  }
			}