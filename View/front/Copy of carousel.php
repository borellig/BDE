	<?php
	include '../../Controller/ctrlCarousel.php';
	?>
	<div class="container">
		<div class="carousel">
			<!-- Bouton pour acc�der � la photo pr�c�dente  -->
			<div class="bt_Precedent" onclick="plusDivs(-1)">&#10094;</div>

			<!-- Ronds en bas de l'image repr�sentant le nombre d'images dans le carousel 
				TODO : g�n�rrer les ronds en php -->
			<span class="demo" onclick="currentDiv(1)"> </span> <span
				class="demo" onclick="currentDiv(2)"> </span> <span class="demo"
				onclick="currentDiv(3)"> </span>

			<!-- Images charg�es dans le carousel 
				TODO : g�n�rer les images en php -->
			<span>
				<?php echo $mesImages; ?>
			</span>

			<!-- Bouton pour acc�der � la photo suivante  -->
			<div class="bt_Suivant" onclick="plusDivs(1)">&#10095;</div>
		</div>				
	</div>
	<hr>
	<div class="container">
		<div class="carousel2">
			<!-- Bouton pour acc�der � la photo pr�c�dente  -->
			<div class="bt_Precedent" onclick="plusDivs(-1)">&#10094;</div>

			<!-- Ronds en bas de l'image repr�sentant le nombre d'images dans le carousel 
				TODO : g�n�rrer les ronds en php -->
			<span class="demo" onclick="currentDiv(1)"> </span> <span
				class="demo" onclick="currentDiv(2)"> </span> <span class="demo"
				onclick="currentDiv(3)"> </span>

			<!-- Images charg�es dans le carousel 
				TODO : g�n�rer les images en php -->
			<span>
				<?php echo $mesImages; ?>
			</span>

			<!-- Bouton pour acc�der � la photo suivante  -->
			<div class="bt_Suivant" onclick="plusDivs(1)">&#10095;</div>
		</div>				
	</div>
	<script type="text/javascript" src="../../Controller/ctrlCarousel.js"></script>'
