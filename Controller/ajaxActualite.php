<?php
	include '_connexion.php';

	$id_event=$_GET["id_event"];
	$ph1=$_GET["ph1"];
	$ph2=$_GET["ph2"];
	$ph3=$_GET["ph3"];
	$type=$_GET["type"];

	/*$affiche1="";
	$affiche2="";
	$affiche3="";*/

	$tabPhoto;
	$tabFinal;

	$query="SELECT MAX(id_photo) FROM photo WHERE album=".$id_event;
	$max_id=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$query="SELECT MIN(id_photo) FROM photo WHERE album=".$id_event;
	$min_id=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$max=mysqli_fetch_array($max_id);
	$min=mysqli_fetch_array($min_id);

	function verifMax($photo, $max, $min) {
		if ($photo==$min[0]) {
			return $max[0];
		}
		else {
			return $photo-1;
		}
	}
	function verifMin($photo, $max, $min) {
		if ($photo==$max[0]) {
			return $min[0];
		}
		else {
			return $photo+1;
		}
	}

	if ($type=="2") {
		$affiche1=verifMax($ph1, $max, $min);
		$affiche2=verifMax($ph2, $max, $min);
		$affiche3=verifMax($ph3, $max, $min);
	}
	else {
		$affiche1=verifMin($ph1, $max, $min);
		$affiche2=verifMin($ph2, $max, $min);
		$affiche3=verifMin($ph3, $max, $min);
	}
	

	/*if ($ph1==$min[0]){
		$affiche1=$max[0];
	}
	else {
		$affiche1=$ph1-1;
	}
	if ($ph2==$min[0]{
		$affiche2=$max[0];
	}
	else {
		$affiche2=$ph2-1;
	}
	if ($ph3==$min[0]){
		$affiche3=$max[0];
	}
	else {
		$affiche3=$ph3-1;
	}*/

	$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$affiche1;
	$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$tabPhoto=mysqli_fetch_array($result);
	$tabFinal[0][0]=$tabPhoto[0];
	$tabFinal[0][1]=$tabPhoto[1];

	$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$affiche2;
	$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$tabPhoto=mysqli_fetch_array($result);
	$tabFinal[1][0]=$tabPhoto[0];
	$tabFinal[1][1]=$tabPhoto[1];

	$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$affiche3;
	$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
	$tabPhoto=mysqli_fetch_array($result);
	$tabFinal[2][0]=$tabPhoto[0];
	$tabFinal[2][1]=$tabPhoto[1];

	/*if ($ph3==$max_id){
		$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$max_id;
		$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
		$tabPhoto=mysqli_fetch_array($result);
		$tabFinal[0][0]=tabPhoto[0];
		$tabFinal[0][1]=tabPhoto[1];

		$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph1;
		$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
		$tabPhoto=mysqli_fetch_array($result);
		$tabFinal[1][0]=tabPhoto[0];
		$tabFinal[1][1]=tabPhoto[1];

		$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph2;
		$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
		$tabPhoto=mysqli_fetch_array($result);
		$tabFinal[2][0]=tabPhoto[0];
		$tabFinal[2][1]=tabPhoto[1];
	}
	else {
		if ($ph1!=$min_id){
			$phTmp=$ph1-1;
			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$phTmp;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[0][0]=$tabPhoto[0];
			$tabFinal[0][1]=$tabPhoto[1];

			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph1;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[1][0]=$tabPhoto[0];
			$tabFinal[1][1]=$tabPhoto[1];

			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph2;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[2][0]=$tabPhoto[0];
			$tabFinal[2][1]=$tabPhoto[1];
		}
		else {
			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$max_id;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[0][0]=$tabPhoto[0];
			$tabFinal[0][1]=$tabPhoto[1];

			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph1;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[1][0]=$tabPhoto[0];
			$tabFinal[1][1]=$tabPhoto[1];

			$query="SELECT id_photo, adresse_photo FROM photo WHERE id_photo=".$ph2;
			$result=mysqli_query($link, $query)  or die('échec de la requête : ' . mysqli_error());
			$tabPhoto=mysqli_fetch_array($result);
			$tabFinal[2][0]=$tabPhoto[0];
			$tabFinal[2][1]=$tabPhoto[1];
		}
	}
	$tab[0]=1;
	$tab[1]=2;*/

	echo json_encode($tabFinal);
?>


