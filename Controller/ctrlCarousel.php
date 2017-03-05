<?php 

	include '_connexion.php';
	
	$mesImages="";
	
	$id_event=2;
	
	$query="SELECT adresse_photo FROM photo WHERE album='".$id_event."';";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	while ($row = mysqli_fetch_assoc($result)) {
		$mesImages.="<img class='imageCarousel".$row['id_event']."' src='".$row['adresse_photo']."'>";
	}
	

?>
