<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Festiv'All</title>
	<link rel="stylesheet" href="css/festadd.css">
	<link rel="stylesheet" href="css/style-nav.css">
</head>

<body>

	<?php include("navbar.php"); ?>

	<section>
		<center>
			<div class="contenu"> 
				<button onclick="fAddText()">Mofifier un festival</button>
				<div id="Cible"></div> 
			</div>
		</center>
	
		<hr>
	
		<h1>Ajoutez votre festival</h1>
		
		<form method="POST" action="festivalCreate.php">
		
			<label for="nom">Nom de l'événement</label>
			<input type="text" name="nom" id="nom" required>
			
			<label for="dateStart">Date et heure de lancement</label>
			<input type="datetime-local" name="dateStart" id="dateStart" required>
			
			<label for="dateStop">Date et heure de cloture</label>
			<input type="datetime-local" name="dateStop" id="dateStop" required>
			
			<label for="lieu">Lieu</label>
			<input type="text" name="lieu" id="lieu" required>
			
			<label for="prix">Prix</label>
			<input type="number" name="prix" id="prix" required>
			
			<label for="description">Description</label>
			<input type="text" name="description" id="description" required>
			
			<label for="artistes">Artistes séparés par une virgule (sans espace)</label>
			<input type="text" name="artistes" id="artistes" required>
			
			<label for="styles-checkbox">Styles musicaux</label>
			<div id="styles-checkbox">
			
				<?php
					include_once("connect.php");
					$list = $bdd->query("SELECT nom FROM style");
					
					foreach($list as $style)
					{
						$name = $style["nom"];
						?>
							<div class='genre'>
								<label for="<?php echo($name); ?>"><?php echo(ucfirst($name)); ?></label>
								<input type="checkbox" name="styles[]" id="<?php echo($name); ?>" value="<?php echo($name); ?>">
							</div>
							
						<?php
					}
				?>
			</div>
				
			<label for="lien">Lien du site</label>
			<input type="url" name="lien" id="lien" required>
				
			<input class="button" type="submit" value="Valider">
		</form>
	</section>
	
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