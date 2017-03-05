<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlActualiteBack.php'
	?>
	<div class="container">
		<section class="ajoutActu">
			<form action="actualite.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Ajouter une actualité</h1>
				<h3>Nom</h3>
				<input type="text" name="nomEvent" required/>
				<br>
				<h3>Description</h3>
				<textarea name="descEvent" rows="10" cols="70" required></textarea>
				<h3>Date</h3>
				<?php echo $calendar; ?>
				<h3>Affiche</h3>
				<input type="file" name="affiche" required/>
				<br/>
				<br/>
				<input type="submit" class="btn_submit" value="Valider">
				<div class="orange"><?php echo $retour;?></div>				
			</form>
		</section>
		<section class="ajoutPhotoMultiple">
			<form action="actualite.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Ajouter des photos à un événement</h1>
				<h1>Evénement</h1>
				<select name="nomEvent" required>
					<?php echo $allEvent?>
				</select>
				<h3>Photos</h3>
				<input type="file" name="multiPhoto[]" required multiple/>
				<div class="orange"><?php echo $retourMP;?></div>	
				<br/>
				<input type="submit" class="btn_submit" value="Valider">
				</form>
		</section>
	</div>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>