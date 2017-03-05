<?php 
	include 'verifSession.php';
	
	$retour='';
	
	if(!empty($_POST['txtPres'])){
		$query="UPDATE presentation SET presentation='".nl2br($_POST['txtPres'])."' WHERE 1;";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	}
	
	if(isset($_FILES['imgAccueil']))
	{
		switch ($_FILES['imgAccueil']['error']) {
			case UPLOAD_ERR_NO_FILE:
				$retour.="Fichier manquant";
				break;
			case UPLOAD_ERR_INI_SIZE:
				$retour.="Fichier dépasse la taille autorisée par PHP";
				break;
			case UPLOAD_ERR_FORM_SIZE:
				$retour.="Fichier dépasse la taille autorisée par le formulaire";
				break;
			case UPLOAD_ERR_PARTIAL:
				$retour.="Fichier transféré partiellemnt";
				break;
			default :
				$retour.="Téléchargement OK";
		}
		
		$nom = "../../Ressources/Images/".$_FILES['imgAccueil']['name'];
		$resultat = move_uploaded_file($_FILES['imgAccueil']['tmp_name'],$nom);
		if ($resultat){
			$retour.=" - Transfert réussi";
			$query="UPDATE presentation SET photo='".$_FILES['imgAccueil']['name']."' WHERE 1;";
			mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
		}
	}
	
	/*if(!empty($_POST['imgAccueil'])){
		$retour.=" - Modification effectuée ";

		
		$query="UPDATE presentation SET photo='".$_POST['imgAccueil']."' WHERE 1;";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
	}
	else $retour.=" C'est vide";*/
		
	
	
	
	
	
	mysqli_close($link);
		
		
?>
