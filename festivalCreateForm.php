<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<style>
	
		input
		{
			display: block;
		}
		#styles-checkbox
		{
			height: 10em;
			width: 10em;
			overflow: auto;
		}
	
	</style>
</head>

<body>

	<form method="POST" action="festivalCreate.php">
	
	<label for="nom">Nom</label>
	<input type="text" name="nom" id="nom" required>
	
	<label for="lieu">Lieu</label>
	<input type="text" name="lieu" id="lieu" required>
	
	<label for="dateStart">Date et heure de lancement</label>
	<input type="datetime-local" name="dateStart" id="dateStart" required>
	
	<label for="dateStop">Date et heure de cloture</label>
	<input type="datetime-local" name="dateStop" id="dateStop" required>
	
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
					
					<label for="<?php echo($name); ?>"><?php echo(ucfirst($name)); ?></label>
					<input type="checkbox" name="styles[]" id="<?php echo($name); ?>" value="<?php echo($name); ?>">
					
				<?php
			}
		?>
	</div>
	
	<label for="lien">Lien du site</label>
	<input type="url" name="lien" id="lien" required>
	
	<label for="password">Mot de passe (demandé lors de la modification)</label>
	<input type="password" name="password" id="password" required>
	
	<input type="submit">
	
	</form>

</body>
</html>