<?php
	$lock="";
	error_reporting(0);

	include("_connexion.php");
	session_start();
	
	if (!isset($_SESSION['user'])){
		$lock='<a href="../back/login.php"><img alt="Connexion Admin" class="lock" src="../../Ressources/Images/padlock.png"/></a>';
	}
	else {
		$lock='<a href="../../Controller/ajaxHeader.php" ><img alt="Déconnexion" class="lock" src="../../Ressources/Images/unlocked.png"/></a>';
	}


?>