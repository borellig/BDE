<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
	
		include '../../Controller/verifSession.php';
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlAccueil.php'
	?>
	<div class="container">
		<section class="presentation">
			<form class="frmAccueil" action="accueil.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Modifier la présentation du BDE</h1>
				<br/>
				<H3>Modifier la présentation</H3>
				<br>
				<textarea name="txtPres" rows="10" cols="100"></textarea>
				<br/>
				<h3>Modifier l'image de présentation</h3>
				<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
				<input type="file" name="imgAccueil"/>
				<br/>
				<input type="submit" class="btn_submit" value="Valider">
				<div class="orange"><?php echo $retour;?></div>
			</form>
		</section>
	</div>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>