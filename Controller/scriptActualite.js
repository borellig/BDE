function auto(id_event, add, type){
	
	setInterval(caroussel(id_event), 2000);
}

function caroussel (id_event, add, type) {
	var alpha = 1+add;
	var beta = 2+add;
	var gamma = 3+add;
	var ph1 = document.getElementById(alpha);
	var ph2 = document.getElementById(beta);
	var ph3 = document.getElementById(gamma);

	if (ph2 != null){
		}
		else {
			alert(ph1.alt+" "+ph2+" "+ph3);
		ph2=document.getElementById(alpha);
		ph3=document.getElementById(alpha);
		}

	

	var xhr;
		// instance objet AJAX
		if (window.XMLHttpRequest){
			xhr = new XMLHttpRequest();
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
    	// envoi requete
    	xhr.open("GET", "../../Controller/ajaxActualite.php?id_event="+id_event+"&& ph1="+ph1.alt+"&& ph2="+ph2.alt+"&& ph3="+ph3.alt+"&& type="+type, true);
    	xhr.send(null);

    	xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				/*var rep = xhr.responseText;
				alert(rep);*/
				var rep = JSON.parse(xhr.responseText);
				ph1.src=rep[0][1];
				ph1.alt=rep[0][0];
				ph2.src=rep[1][1];
				ph2.alt=rep[1][0];
				ph3.src=rep[2][1];
				ph3.alt=rep[2][0];
			}
		}
	}