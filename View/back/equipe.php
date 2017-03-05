<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlEquipeBack.php';
	?>
	<div class="container">
		<section class="ajoutMbr">
			<form action="equipe.php" method="post" enctype="multipart/form-data">
				<h1 class="orange">Ajouter un membre</h1>
				<h3>Nom, prénom</h3>
				<input type="text" name="nomMbr" required/>
				<br>
				<h3>Rôle</h3>
				<input type="text" name="roleMbr" required/>
				<br>
				<h3>Commentaire</h3>
				<textarea name="commentaireMbr" rows="10" cols="70" required></textarea>
				<h3>Photo</h3>
				<input type="file" name="photoMbr" required/>
				<br/>
				<span style="font-style: italic; font-size: 70%;">Attention, cette image apparaitra sous la forme d'un cercle centrée en son milieu.</span>
				<br/>
				<input type="submit" class="btn_submit" name="soumettre" value="Ajouter">
				<div class="orange"><?php echo $retour;?></div>				
			</form>
		</section>
		<section class="modificationMbr">
			<h1 class="orange">Administration des membres</h1>
			<h1>Membre</h1>
			<select name="selectMbr" id="selectMbr" onchange="setHidden(this.value);selectMembre(this.value)" required>
				<option value="-1">--</option>
				<?php echo $allMbr; ?>
			</select> 
			<br/>
			<br/>
			<button class="choix" onclick="setVisibleModif();">Modifier</button>
			<button class="choix" onclick="setVisibleConf();">Supprimer</button>
			<form action="equipe.php" method="post" enctype="multipart/form-data" id="modifier">
				<h1 class="orange">Ajouter un membre</h1>
				<h3>Nom, prénom</h3>
				<input type="text" name="nomMbrCh" id="chNom" required/>
				<br>
				<h3>Rôle</h3>
				<input type="text" name="roleMbrCh" id="chRole" required/>
				<br>
				<h3>Commentaire</h3>
				<textarea name="commentaireMbrCh" rows="10" cols="70" id="chCommentaire" required></textarea>
				<h3>Photo</h3>
				<img src="" id="chPhoto" class="chPhoto"/>
				<br/>
				<input type="file" name="photoMbrCh" id="appercuPh" onchange="appercu()"/>
				<br/>
				<span style="font-style: italic; font-size: 70%;">Attention, cette image apparaitra sous la forme d'un cercle centrée en son milieu.</span>
				<br/>
				<input type="hidden" name="modif" id="modif" value="">
				<input type="submit" class="btn_submit" name="soumettre" value="Modifier">
				<div class="orange"><?php echo $retourCh;?></div>				
			</form>
			<form action="equipe.php" method="post" enctype="multipart/form-data" id="confirmation">
				<h1>Etes-vous sûr de vouloir supprimer ce membre ?</h1>	
				<input type="hidden" name="suppr" id="suppr" value="">
				<input type="submit" class="btn_submit" name="soumettre" value="Supprimer">
				<div class="orange"><?php echo $retourConf;?></div>		
			</form>		
		</section>
	</div>
	<?php 
	include '../general/footer.php';
	?>
	<script src="../../Controller/scriptEquipeBack.js"></script>
</body>
</HTML>