<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Festiv'All</title>
	<link rel="stylesheet" href="css/festadd.css">
	<link rel="stylesheet" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/style-footer.css">
</head>

<body>

	<?php include("navbar.php"); ?>

	<section>
		<h1>Modifier un festival</h1><br><br><br>
		<center>
			<div class="contenu">
				<form action="festmodif.php" method="POST">
					<input id="pass" name="pass" placeholder="Votre identifiant unique" type="password">
					<input id="passvalid" type="submit" class="button">
				</form>
				
			</div><br><br>
		</center>
	
		<hr>
	
		<h1>Ajouter un festival</h1>
		
		<?php include("addForm.php"); ?>
		
	</section>
	
	<?php include("footer.php"); ?>
	
	<script type="text/javaScript"> 
		function fAddText() { 
			var btn = document.getElementById('Cible');
			if(btn.childNodes.length === 0)
			{
				btn.innerHTML =
				'<form method="POST"><input id="pass" placeholder="Votre identifiant unique" type="password"><input id="passvalid" type="submit"></form>';
			}
			else
			{
				btn.innerHTML =''; 
			}
		} 
	</script>
	
</body>
</html>