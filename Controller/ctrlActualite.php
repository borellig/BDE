<?php 
	include "_connexion.php";

	
	$actu='';
	$car="";
	$i=1;
	$a=0;
	
	$query="SELECT * FROM evenement";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	while ($row = mysqli_fetch_assoc($result)) {
		$car="";
		$actu.='<div class="actu"><H1 class="orange">'.$row['nom'].'</H1><br/>';
		$actu.='<p>Le : '.$row['date_event'].'</p><br/>';
		$actu.='<p>'.nl2br($row['commentaire']).'</p><br/>';
		$req="SELECT id_photo, adresse_photo FROM photo WHERE album=".$row['id_event']." LIMIT 3;";
		$resultat=mysqli_query($link, $req)  or die('Échec de la requête : ' . mysqli_error());
		if (mysqli_num_rows($resultat)>0) {
			$car.="<img src='../../Ressources/Images/back.png' onClick='caroussel(".$row['id_event'].", ".$a.", 1)' class='fleche'/>";
			while ($ligne=mysqli_fetch_assoc($resultat)) {
				$car.="<img src='".$ligne['adresse_photo']."' id='".$i."' alt='".$ligne['id_photo']."' class='caroussel'/>";
				$i++;
				$alt=$ligne['id_photo'];
				$src=$ligne['adresse_photo'];
			}
			while (($i-1)%3 != 0) {
				$car.="<img src='".$src."' id='".$i."' alt='".$alt."' class='caroussel' />";
				$i++;
				}
			$car.="<img src='../../Ressources/Images/next.png' onClick='caroussel(".$row['id_event'].", ".$a.", 2)' class='fleche'/>";
			}
		else {
			$car='<img class="photoAffiche" src="'.$row['photo_couverture'].'">';
		}
		$actu.=$car;
		$actu.='</div>';
		$a=$a+3;
	}
?>