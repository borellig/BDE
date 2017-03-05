//var xhr = null;
//
//    if (window.XMLHttpRequest || window.ActiveXObject) {
//        if (window.ActiveXObject) {
//            try {
//                xhr = new ActiveXObject("Msxml2.XMLHTTP");
//            } 
//            catch(e) {
//                xhr = new ActiveXObject("Microsoft.XMLHTTP");
//            }
//        } 
//        else {
//            xhr = new XMLHttpRequest(); 
//        }
//    } 
//    else {
//        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
//    }
    
    
    function presMbr(clicked_id){
		var xhr;
		// instance objet AJAX
		if (window.XMLHttpRequest){
			xhr = new XMLHttpRequest();
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
    	// envoi requete
    	xhr.open("GET", "../../Controller/ajaxEquipe.php?id="+clicked_id, true);
    	xhr.send(null);

    	xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				var rep = JSON.parse(xhr.responseText);
				document.getElementById("nom").innerHTML=rep[1];
				document.getElementById("role").innerHTML=rep[2];
				document.getElementById("photo").src=rep[3];
				document.getElementById("commentaire").innerHTML=rep[4];
				document.getElementById("prsMbr").style.display="initial";
			}
        }
    	
    }