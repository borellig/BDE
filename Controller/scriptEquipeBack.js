function setHidden(id) {
	document.getElementById("modif").value=id;
	document.getElementById("suppr").value=id;
}

function setVisibleModif() {
	document.getElementById("modifier").style.display="initial";
	document.getElementById("confirmation").style.display="none";
}

function setVisibleConf() {
	document.getElementById("confirmation").style.display="initial";
	document.getElementById("modifier").style.display="none";
}

function selectMembre(id){
	var xhr;
		// instance objet AJAX
		if (window.XMLHttpRequest){
			xhr = new XMLHttpRequest();
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		if (id!=-1) {
	    	// envoi requete
	    	xhr.open("GET", "../../Controller/ajaxEquipe.php?id="+id, true);
	    	xhr.send(null);

	    	xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					var rep = JSON.parse(xhr.responseText);
					document.getElementById("chNom").value=rep[1];
					document.getElementById("chRole").value=rep[2];
					document.getElementById("chPhoto").src=rep[3];
					document.getElementById("chCommentaire").value=rep[4];
				}
	        }
	    }
	    else {
	    	document.getElementById("chNom").value=null;
			document.getElementById("chRole").value=null;
			document.getElementById("chPhoto").src=null;
			document.getElementById("chCommentaire").value=null;
	    }
}

function appercu() {
	var input = document.getElementById("appercuPh");
	var fReader = new FileReader();
	fReader.readAsDataURL(input.files[0]);
	fReader.onloadend = function(event){
		var img = document.getElementById("chPhoto");
		img.src = event.target.result;
	}
}

