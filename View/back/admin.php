<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
	
		include '../../Controller/verifSession.php';
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlAdmin.php'
	?>
	<div class="container">
		<section class="ajout">
			<form class="frmAjout" action="admin.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Ajouter un administrateur</h1>
				<br/>
				<h3>Identifiant</h3>
				<input type="text" name="login" id="ajLogin" required/><BR/>
				<h3>Mot de passe</h3>
				<input type="password" name="pass" id="ajPass" onKeyUp="secuPass('pwd', 'ajPass', 'ajouter');verifPass()" required/>
				<span id="pwd"></span><BR/>
				<h3>Confirmez le mot de passe</h3>
				<input type="password" name="confPass" id="ajConfPass" onKeyUp="verifPass()" required/>
				<span id="pwdConf"></span><BR/><BR/>
				<input type="submit" class="btn_submit" id="ajouter" value="ajouter" name="soumettre" disabled="disabled"/>
				<div class="orange"><?php echo $retourAj;?></div>
			</form>
		</section>
		<section class="modification">
			<form class="frmMdf" action="admin.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Modifier un administrateur</h1>
				<h3>Selection</h3>
				<select name="select" id="select" required>
					<option value="-1">--</option>
					<?php echo $all; ?>
				</select> 
				<BR/>
				<input type="password" name="mdPass" id="mdPass" onKeyUp="secuPass('mdfPwd', 'mdPass', 'mdf')" required/>
				<span id="mdfPwd"></span><BR/>
				<!-- <input type="submit" class="btn_submit" id="modifier" value="modifier" name="soumettre" disabled="disabled">raaa -->
				<input type="submit" class="btn_submit" id="mdf" value="modifier" name="soumettre" disabled="disabled"/>
				<div class="orange"><?php echo $retourMdf;?></div>
			</form>
		</section>
		<section class="suppression">
			<form class="frmSupr" action="admin.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Supprimer un administrateur</h1>
				<h3>Selection</h3>
				<select name="selectSupr" id="selectSupr" onChange="verifSelect(value)" required>
					<option value="-1">--</option>
					<?php echo $all; ?>
				</select> 
				<BR/>
				<input type="submit" class="btn_submit" id="supr" value="supprimer" name="soumettre" disabled="disabled"/>
				<div class="orange"><?php echo $retourSupr;?></div>
			</form>			
		</section>
	</div>
	<?php 
	include '../general/footer.php';
	?>
	<script src="../../Controller/scriptAdmin.js"></script>
</body>
</HTML>