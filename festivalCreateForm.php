<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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
	
	<label for="taille">Nombre de places</label>
	<input type="number" name="taille" id="taille" required>
	
	<label for="description">Description</label>
	<input type="text" name="description" id="description" required>
	
	<label for="artistes">Artistes séparés par une virgule (sans espace)</label>
	<input type="text" name="artistes" id="artistes" required>
	
	<label for="styles">Styles musicaux séparés par une virgule (sans espaces)</label>
	<input type="text" name="styles" id="styles" required>
	
	<label for="lien">Lien du site</label>
	<input type="url" name="lien" id="lien" required>
	
	<label for="password">Mot de passe (demandé lors de la modification)</label>
	<input type="password" name="password" id="password" required>
	
	<input type="submit">
	
	</form>

</body>
</html>