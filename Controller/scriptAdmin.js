function verifPass() {
	var mdp=document.getElementById("ajPass");
	var confMdp=document.getElementById("ajConfPass");

	if (mdp.value==confMdp.value && mdp.value!=""){
		document.getElementById("ajouter").disabled="";
		document.getElementById("ajConfPass").style="background-color:green;"
		document.getElementById("pwdConf").innerHTML="";
	}
	else {
		document.getElementById("ajouter").disabled="true";
		document.getElementById("ajConfPass").style="background-color:red;"
		document.getElementById("pwdConf").innerHTML="<BR/>Les deux mots de passe doivent être identiques";
	}
}

function verifSelect(value){
	if (value!="-1"){
		document.getElementById("supr").disabled="";
	}
	else {
		document.getElementById("supr").disabled="true";
	}
}

function secuPass(span, chPwd, btn){
	//alert(" "+span+" "+chPwd+" "+btn)
	var mdp=document.getElementById(chPwd);
	var nbChar=false;
	var chiffre=false;
	var maj=false;
	var message="<BR/>Votre mot de passe doit contenir au moins : ";
	//Si moins de 9 caractères
	if(mdp.value.length<8){
		document.getElementById(btn).disabled="true";
		document.getElementById(chPwd).style="background-color:red;"
		message+="8 caractères "
	}
	else {
		nbChar=true;
		/*document.getElementById("ajouter").disabled="";
		document.getElementById("ajPass").style="background-color:green;"*/
	}

	//Si pas de chiffre
	if(!/\d/.test(mdp.value)){
		document.getElementById(btn).disabled="true";
		document.getElementById(chPwd).style="background-color:red;"
		message+="un chiffre "
	}
	else {
		/*document.getElementById("ajouter").disabled="";
		document.getElementById("ajPass").style="background-color:green;"*/
		chiffre=true;
	}

	//Si ne contient pas minuscules et majuscules
	if(mdp.value.match(new RegExp("[a-z]")) && mdp.value.match(new RegExp("[A-Z]"))){
    	/*document.getElementById("ajouter").disabled="";
    	document.getElementById("ajPass").style="background-color:green;"*/
    	maj=true;
    }
    else {
    	document.getElementById(btn).disabled="true";
    	document.getElementById(chPwd).style="background-color:red;"
    	message+="une majuscule et une minuscule"
    	
    }

    if (nbChar && chiffre && maj){
    	document.getElementById(btn).disabled="";
    	document.getElementById(chPwd).style="background-color:green;";
    	document.getElementById(span).innerHTML="";
    }
    else {
    	document.getElementById(span).innerHTML=message;
    }

}