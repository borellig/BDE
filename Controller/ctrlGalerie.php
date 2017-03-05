<?php 
	include "_connexion.php";
	
	$gal='';
	$i=0;
	
	$query="SELECT * FROM evenement WHERE date_event < NOW()";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	while ($row = mysqli_fetch_assoc($result)) {
		$req="SELECT adresse_photo FROM photo WHERE album=".$row['id_event'];
		$resultat=mysqli_query($link, $req)  or die('Échec de la requête : ' . mysqli_error());
		$gal.='<a href="#'.$i.'"></a><div class="event"><H1 class="orange">'.$row['nom'].'</H1><br/><div id="'.$i.'"></div><br/>';
		if (mysqli_num_rows($resultat)>0) {
			while ($ligne=mysqli_fetch_assoc($resultat)) {
				$gal.='<img class="photo" src="'.$ligne['adresse_photo'].'" onclick="affichePhoto(\''.$ligne['adresse_photo'].'\', '.$i.')">';
			}
		}
		else {
			$gal.='<span class="orange">Les photos arrivent bientôt, patience...</span>';
		}
		$gal.='</div>';
		$i+=1;
	}
?>