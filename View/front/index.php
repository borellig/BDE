<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlIndex.php'
	?>
	<div class="container">
		<section class="gauche">
			<div class="txtAccueil">
				<h1 class="orange" >Présentation</h1>
				<p>
					<?php echo $txt; ?>
				</p>
			</div>
			<img class="imgAccueil" alt="photo de l'ensemble du bde" src="../../Ressources/Images/<?php echo $photo;?>"/>
		</section>
		<section class="droite">
			<div class="txtAccueil">
				<h1 class="orange">Prochain événement</h1>
				<p>
					<?php
						echo $nextActu;
					?>
				</p>
				<img class="imgAccueil" alt="photo de l'événement à venir" src="<?php echo $nextActuPhoto ?>"/>
			</div>
		</section>		
	</div>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>