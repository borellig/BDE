<?php 
	include("_connexion.php");

	@$login;
	@$mdp;
	$refus="";
	
	session_start();
	
	if (isset($_SESSION['user'])){
		header('Location: accueil.php');
	}

	if(!empty($_POST['id'])){
		$login=$_POST['id'];
	}
	if(!empty($_POST['pwd'])){
		$mdp=$_POST['pwd'];
	}
	if(!empty($_POST['pwd']) && !empty($_POST['id'])){
		$query="SELECT * FROM utilisateur WHERE login='".$login."' AND mot_de_passe='".$mdp."';";
		$result = mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error());
		if ($result->num_rows==0){
			$refus="Connexion refusée";
		}
		else {
			session_start();
			$_SESSION['user']=$_POST['id'];
			$_SESSION['password']=$_POST['pwd'];
			
			if (isset($_SESSION['user'])){
				header('Location: accueil.php');
			}
			else {
				echo "Non redirigeable";
			}
		}
	}
	mysqli_close($link);

?>