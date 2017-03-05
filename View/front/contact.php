<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlContact.php'
	?>
	<div class="container">
		<form class="frmContact" action="contact.php" method="post">
			<p>
				<label>Nom, prenom :</label>
				<br/>
				<input type="text" id="identite" name="identite" required/>
			<p>	
			<p>
				<label>Email :</label>
				<br/>
				<input type="email" id="email" name="email" required/>
			<p>	
			<p>
				<label>Message :</label>
				<br/>
				<textarea id="message" name="message" rows="10" cols="100" required></textarea>
			<p>	
			<input type="submit" class="btn_submit" value="Envoyer"/>	
			<br/>
				<span class="orange"><?php echo $retour ?></span>
		</form>
	</div>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>