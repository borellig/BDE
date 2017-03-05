<?php 
	include 'verifSession.php';
	$retour="";
	$retourCh="";
	$retourConf="";
	$allMbr="";
	$soumettre="";
	
	$req="SELECT id_membre, nom FROM membre";
	$result=mysqli_query($link, $req)  or die('Échec de la requête : ' . mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)) {
		$allMbr.="<option value='".$row['id_membre']."'>".$row['nom']."</option>";
	}
	
	if ($_POST['soumettre']=="Ajouter") {
		switch ($_FILES['photoMbr']['error']) {
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
		$nom = "../../Ressources/Images/photoMbr_".$_FILES['photoMbr']['name'];
		$resultat = move_uploaded_file($_FILES['photoMbr']['tmp_name'],$nom);
		if ($resultat){
			$retour.=" - Ajout du membre réussi";
			$query="INSERT INTO membre (nom, role, photo, commentaire) VALUES ('".$_POST['nomMbr']."', '".$_POST['roleMbr']."', '".$nom."', '".$_POST['commentaireMbr']."');";
			mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		}
	}
	
	if ($_POST["soumettre"]=="Supprimer"){
		$query="DELETE FROM membre WHERE id_membre=".$_POST['suppr'].";";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		$retourConf="Suppression effectuée";
	}
	
	if ($_POST["soumettre"]=="Modifier"){
		if (isset($_FILES['photoMbrCh'])){
			switch ($_FILES['photoMbrCh']['error']) {
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
			$nomCh = "../../Ressources/Images/photoMbr_".$_FILES['photoMbrCh']['name'];
			$resultat = move_uploaded_file($_FILES['photoMbrCh']['tmp_name'],$nomCh);
			if ($resultat){
				$query="UPDATE membre SET nom='".$_POST['nomMbrCh']."', role='".$_POST['roleMbrCh']."', photo='".$nomCh."', commentaire='".$_POST['commentaireMbrCh']."' WHERE id_membre='".$_POST["modif"]."';";	
			}
			else {
				$query="UPDATE membre SET nom='".$_POST['nomMbrCh']."', role='".$_POST['roleMbrCh']."', commentaire='".$_POST['commentaireMbrCh']."' WHERE id_membre='".$_POST["modif"]."';";
			}
		}
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		$retourCh="Changement effectué";
	}

?>