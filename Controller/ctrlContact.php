<?php 
	include '_connexion.php';
	
	$identite;
	$email;
	$mess;
	$today = date("Y-m-d");
	
	$retour="";

	if (!empty($_POST['identite'])){
		$identite=$_POST['identite'];
	}
	if (!empty($_POST['email'])){
		$email=$_POST['email'];
	}
	if (!empty($_POST['message'])){
		$mess=nl2br($_POST['message']);
	}
	
	if (!empty($_POST['identite'])){ 
	$query="INSERT INTO contact (identite, mail, message, date) VALUES ('".$identite."', '".$email."', '".$mess."', '".$today."');";
		$res=mysqli_query($link, $query) or die('Échec de la requête : ' . mysqli_error($link));
		if ($res) {
			$retour="Message transmis, nous vous répondrons dès que possible !";
		}
}
	
	
?>
