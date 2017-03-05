<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlMessagerie.php'
	?>
	<div class="container">
		<section class="tousMessages">
			<?php echo $affichage; ?>
		</section>
	</div>
	<?php 
	include '../general/footer.php';
	?>
</body>
</HTML>
