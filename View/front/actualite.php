<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" type="text/css" href="../../Style/allCSS.css">
</head>
<body>
	<?php 
		include '../general/header.php';
		include 'menu.php';
		include '../../Controller/ctrlActualite.php'
	?>
	<div class="container">
		<?php echo $actu; ?>
	</div>
	<?php 
	include '../general/footer.php';
	?>
	<script src='../../Controller/scriptActualite.js'></script>
</body>
</HTML>