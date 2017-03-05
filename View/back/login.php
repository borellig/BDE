<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include '../../Controller/ctrlLogin.php';
	?>
	<div class="container">
		<form class="frmContact" action="login.php" method="post">
			<p>
				<label>Identifiant :</label>
				<br/>
				<input type="text" id="id" name="id" required/>
			<p>	
			<p>
				<label>Mot de passe :</label>
				<br/>
				<input type="password" id="pwd" name="pwd" required/>
			<p>	
			<input type="submit" class="btn_submit" value="Connexion"/>	
			<div id="refus" class="orange"><?php echo $refus ?></div>
		</form>
	</div>
	<?php 
	include '../general/footer.php';
	?>
	</body>
</HTML>