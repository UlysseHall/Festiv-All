<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>

<body>

<?php
include("connect.php");
$listLieu = $bdd->query("SELECT lieu FROM festival group by lieu");
$listStyle = $bdd->query("SELECT id, nom FROM style");
?>

	<form action="festivalSearch.php" method="POST">
		<label for="lieu">Lieu</label>
		<select name="lieu" id="lieu">
			<option value="">Partout</option>
			<?php
				foreach($listLieu as $lieu)
				{
					$place = $lieu["lieu"];
					?>
					<option value="<?php echo($place); ?>"><?php echo(ucfirst($place)); ?></option>
					<?php
				}
			?>
		</select>
		
		<label for="style">Style</label>
		<select name="style" id="style">
			<option value="">Tous</option>
			<?php
				foreach($listStyle as $style)
				{
					$genre = $style["nom"];
					$genreId = $style["id"];
					?>
					<option value="<?php echo($genreId); ?>"><?php echo(ucfirst($genre)); ?></option>
					<?php
				}
			?>
		</select>
		
		<label for="mois">Mois</label>
		<select name="mois" id="mois">
			<option value="">Toute l'année</option>
			<option value="1">Janvier</option>
			<option value="2">Février</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">Août</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Décembre</option>
		</select>
		
		<input type="submit">
	</form>

</body>
</html>