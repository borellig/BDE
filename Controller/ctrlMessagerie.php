<?php

	include 'verifSession.php';

	$affichage="";

	$query="SELECT identite, mail, message, date FROM contact";
	$result=mysqli_query($link, $query)  or die('Échec de la requête : ' . mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['identite']!="") {
			$affichage.='<div class="message"><H3>Identite</H3>'.$row['identite'].'<br/><H3>Email</H3>'.$row['mail'].'<br/><H3>Message</H3>'.nl2br($row['message']).'<br/><br/> Le : '.$row['date'].'</div>';
		}
	}





?>