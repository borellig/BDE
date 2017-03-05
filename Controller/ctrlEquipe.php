<?php 

	include '_connexion.php';
	
	$membres="<ul class='listeMembres'>";
	
	$query="SELECT * FROM membre";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	while ($row = mysqli_fetch_assoc($result)) {
		$membres.="<li class='mbr'id='".$row['id_membre']."' onmouseover=presMbr(this.id)>".$row['role']."</li>";
	}
	$membres.="</ul>";


?>