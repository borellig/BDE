<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css"> 
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlEquipe.php'
	?>
	<div class="container">
		<div class="selectMbr"><?php echo $membres;?></div>
		<div id="prsMbr" class="presMbr">
			<p class="orange" id="nom" style="font-weight: bold;"></p>
			<p id="role"></p>
			<img id="photo" alt="photo du membre" src="" class="chPhoto"/>
			<p id="commentaire"></p>
		</div>
	</div>
	<script src="../../Controller/scriptEquipe.js"></script>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>