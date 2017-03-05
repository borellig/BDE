<?php 
	include 'verifSession.php';
	$calendar='';
	$today = date("Y-m-d");
	
	$retour="";
	$retourMP="";
	$allEvent="";
	
	$calendar.='<select name="jour" required><option value="">jj</option>';
	for ($i = 1; $i <= 31; $i++) {
		$calendar.='<option value="'.$i.'">'.$i.'</option>';
	}
	$calendar.="</select>";
	$calendar.='<select name="mois" required><option value="">mm</option>';
	for ($i = 1; $i <= 12; $i++) {
		$calendar.='<option value="'.$i.'">'.$i.'</option>';
	}
	$calendar.="</select>";
	$calendar.='<select name="annee" required><option value="">aaaa</option>';
	for ($i = 1970; $i <= 2050; $i++) {
		$calendar.='<option value="'.$i.'">'.$i.'</option>';
	}
	$calendar.="</select>";
	
	if (!empty($_POST['nomEvent'])&&!empty($_POST['descEvent'])&&!empty($_POST['jour'])&&!empty($_POST['mois'])&&!empty($_POST['annee'])&&!empty($_FILES['affiche'])) {
		if(isset($_FILES['affiche']))
		{
			switch ($_FILES['affiche']['error']) {
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
			$dateEv = new DateTime();
			$dateEv->setDate($_POST['annee'], $_POST['mois'], $_POST['jour']);
			$dateEv= $dateEv->format('Y-m-d');
			$nom = "../../Ressources/Images/affiche_".$_FILES['affiche']['name'];
			
			$resultat = move_uploaded_file($_FILES['affiche']['tmp_name'],$nom);
			if ($resultat){
				$retour.=" - Transfert réussi";
				$query="insert into evenement (nom, commentaire, date_creation, date_event, photo_couverture) VALUES ('".$_POST['nomEvent']."', '".$_POST['descEvent']."', '".$today."', '".$dateEv."', '".$nom."');";
				mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
			}
		}
	}
	
	$req="SELECT id_event, nom FROM evenement";
	$result=mysqli_query($link, $req)  or die('Échec de la requête : ' . mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)) {
		$allEvent.="<option value='".$row['id_event']."'>".$row['nom']."</option>";
	}
	if(isset($_FILES['multiPhoto']))
	{
		switch ($_FILES['multiPhoto']['error']) {
			case UPLOAD_ERR_NO_FILE:
				$retourMP.="Fichier manquant";
				break;
			case UPLOAD_ERR_INI_SIZE:
				$retourMP.="Fichier dépasse la taille autorisée par PHP";
				break;
			case UPLOAD_ERR_FORM_SIZE:
				$retourMP.="Fichier dépasse la taille autorisée par le formulaire";
				break;
			case UPLOAD_ERR_PARTIAL:
				$retourMP.="Fichier transféré partiellemnt";
				break;
			default :
				$retourMP.="Téléchargement OK";
		}
		
		
		
		foreach ($_FILES['multiPhoto']['error'] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$nom = "../../Ressources/Images/".$_POST['nomEvent']."_".$_FILES['multiPhoto'][$key];
				$query="insert into photo (adresse_photo, date_creation, album) VALUES ('../../Ressources/Images/".$_POST['nomEvent']."_".$_FILES['multiPhoto']['name'][$key]."', '".$today."', '".$_POST['nomEvent']."');";
				mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
				$nom = "../../Ressources/Images/".$_POST['nomEvent']."_".$_FILES['multiPhoto']['name'][$key];
				move_uploaded_file($_FILES['multiPhoto']['tmp_name'][$key], $nom);
			}
		}

	}

	
	
	
	
	
	
	
	
	
	
	
	
	
?>