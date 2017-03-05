var slideIndex = -1;
var indexPrecedent;
var indexSuivant = 1;
showDivs(0);
 //carousel();

// Affiche l'image suivante à l'image courante
function plusDivs(n) {
	showDivs(slideIndex += n);
}

function currentDiv(n) {
	showDivs(slideIndex = n);
}

// Fonction permettant de passer d'une photo à l'autre après un clic sur un des
// bouton précédent ou suivant
function showDivs(n, id) {
	var i;
	var x = document.getElementsByClassName("imageCarousel"+id);

	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		x[i].className = "imageCarousel"+id;
	}
	
	if (n > x.length-1) {
		slideIndex = 0;
		indexSuivant = 1;
		indexPrecedent = x.length - 1;
	} else if (n < 0) {
		indexPrecedent = x.length - 2;
		indexSuivant = 0;
		slideIndex = x.length - 1;
	} else if (n == 0) {
		indexPrecedent = x.length - 1;
		indexSuivant = 1;
		slideIndex = 0;
	} else if (n == x.length - 1) {
		slideIndex = n;
		indexPrecedent = slideIndex - 1;
		indexSuivant = 0;
	}
	else {
		slideIndex = n;
		indexPrecedent = slideIndex - 1;
		indexSuivant = slideIndex + 1;
	}	

	x[indexSuivant].style.display = "inline";
	x[indexSuivant].className += " imageDroiteCarousel";
	x[slideIndex].style.display = "inline";
	x[slideIndex].className += " imageCentraleCarousel";
	x[indexPrecedent].style.display = "inline";
	x[indexPrecedent].className += " imageGaucheCarousel";
}

// Fonction permettant de faire défiler automatiquement les photos toutes les 4
// secondes
function carousel(id) {
	var i;

	var x = document.getElementsByClassName("imageCarousel"+id);

	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		x[i].className = "imageCarousel"+id;
	}
	slideIndex++;

	if (slideIndex > x.length - 1) {
		slideIndex = 0;
	}

	if (slideIndex == 0) {
		indexPrecedent = x.length - 1;
		indexSuivant = 1;
	}
	// Ce système permet que le carousel tourne infiniment sur les mêmes photos
	else if (slideIndex == x.length - 1) {
		indexPrecedent = slideIndex - 1;
		indexSuivant = 0;
	} else {
		indexPrecedent = slideIndex - 1;
		indexSuivant = slideIndex + 1;
	}

	x[indexSuivant].style.display = "inline";
	x[indexSuivant].className += " imageDroiteCarousel";
	x[slideIndex].style.display = "inline";
	x[slideIndex].className += " imageCentraleCarousel";
	x[indexPrecedent].style.display = "inline";
	x[indexPrecedent].className += " imageGaucheCarousel";

	setTimeout(carousel, 5000);
}