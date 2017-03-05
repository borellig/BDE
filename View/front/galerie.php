<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlGalerie.php'
	?>
	<div class="container">
		<?php echo $gal; ?>
	</div>
	<?php 
	include '../general/footer.php';
	?>
	<script>
function affichePhoto(adrPhoto, idDiv) {
    document.getElementById(idDiv).innerHTML = '<img class="photoGrde" src="'+adrPhoto+'"><button class="btn" onclick="fermer('+idDiv+')">Fermer</button>';
    //<img src="../../Ressources/Images/1_Chrysanthemum.jpg">
}

function fermer(idDiv) {
	document.getElementById(idDiv).innerHTML = '';
	window.location.href="#"+idDiv;
}
</script>
	
</body>
</HTML>