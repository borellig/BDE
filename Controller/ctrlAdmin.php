<?php
	include "_connexion.php";

	$soumettre="";
	$retourAj="";
	$all="";
	$retourMdf="";
	$retourSupr="";

	if ($_POST["soumettre"]=="ajouter" && isset($_POST['login'])){
		$query="INSERT INTO utilisateur (login, mot_de_passe) VALUES ('".$_POST["login"]."', '".$_POST["pass"]."');";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		$retourAj="Administrateur ajouté avec succès";
		$retourMdf="";
		$retourSupr="";
	}

	$query="SELECT DISTINCT(login) FROM utilisateur";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)) {
		$all.="<option value='".$row['login']."'>".$row['login']."</option>";
	}

	if ($_POST["soumettre"]=="modifier" && $_POST['select']!=-1){
		$query="UPDATE utilisateur SET mot_de_passe='".$_POST["mdPass"]."' WHERE login='".$_POST['select']."';";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		$retourMdf="Mot de passe modifié";
		$retourAj="";
		$retourSupr="";
	}

	if ($_POST["soumettre"]=="supprimer" && $_POST['select']!=-1){
		$query="DELETE FROM utilisateur WHERE login='".$_POST['selectSupr']."';";
		mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
		header("Refresh:0");
		$retourSupr="Administrateur ".$_POST['selectSupr']." supprimé";
		$retourMdf="";
		$retourAj="";
	}

?>