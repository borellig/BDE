function deconnect() {
	var xhr;
	// instance objet AJAX
	if (window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}
	else{
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhr.open("GET", "../../Controller/ajaxHeader.php", true);
	xhr.send(null);

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			if(window.location.href.search("back")!=-1) {
				window.location.href='../front/index.php';
				var rep = xhr.responsetext;
				alert(rep);
			} 
		}
    }
}