<?php 	
	// header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).
	include '_connexion.php';
	
	$id_mbr=$_GET["id"];
	
	$query="SELECT * FROM membre WHERE id_membre=".$id_mbr;
	$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$tabMembre=mysqli_fetch_array($result);
	echo json_encode($tabMembre, JSON_PRETTY_PRINT);
	
	
?>