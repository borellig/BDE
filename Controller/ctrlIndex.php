<?php 
	include '_connexion.php';
	
	$txt;
	$photo;

	$nextActu;
	$nextActuPhoto;
	
	$query="SELECT * FROM presentation WHERE 1;";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	$row=mysqli_fetch_assoc($result);
	$txt=$row['presentation'];
	$photo=$row['photo'];

	$actu='';
	
	$query="SELECT * FROM evenement WHERE date_event>=Now() ORDER BY date_event limit 1";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	while ($row = mysqli_fetch_assoc($result)) {
		$actu.='<div class="actuIndex"><H1 class="orange">'.$row['nom'].'</H1><br/>';
		$actu.='<p>Le : '.$row['date_event'].'</p><br/>';
		$actu.='<p>'.nl2br($row['commentaire']).'</p><br/>';
		$nextActuPhoto=$row['photo_couverture'];
		$actu.='</div>';
		
	}
	
	$nextActu=$actu;
	

?>