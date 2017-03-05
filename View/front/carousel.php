	<?php
	include '../../Controller/ctrlCarousel.php';
			
	$carousel='<div class="carousel">
			<!-- Bouton pour acc�der � la photo pr�c�dente  -->
			<div class="bt_Precedent" onclick="plusDivs(-1, '.$row['id_event'].')">&#10094;</div>

			<!-- Ronds en bas de l\'image repr�sentant le nombre d\'images dans le carousel 
				TODO : g�n�rrer les ronds en php -->
			<span class="demo" onclick="currentDiv(1, '.$row['id_event'].')"> </span> <span
				class="demo" onclick="currentDiv(2, '.$row['id_event'].')"> </span> <span class="demo"
				onclick="currentDiv(3, '.$row['id_event'].')"> </span>

			<!-- Images charg�es dans le carousel 
				TODO : g�n�rer les images en php -->
			<span>';
	$carousel2='</span><!-- Bouton pour acc�der � la photo suivante  -->
			<div class="bt_Suivant" onclick="plusDivs(1, '.$row['id_event'].')">&#10095;</div>
	<script type="text/javascript" src="../../Controller/ctrlCarousel.js"></script>';		
	?>
	