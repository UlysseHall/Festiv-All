<!--
	Formulaire de création / modification de festival inclus
	dans festadd.php et festmodif.php
-->

<form method="POST" action="<?php if(isset($info)) { echo("festivalUpdate.php"); } else { echo("festivalCreate.php"); } ?>">
		
	<label for="nom">Nom de l'événement</label>
	<input type="text" name="nom" id="nom" required <?php if(isset($info)) { echo("value='".$info["nom"]."'"); } ?>>
			
	<label for="dateStart">Date et heure de lancement</label>
	<input type="datetime-local" name="dateStart" id="dateStart" required <?php if(isset($info)) { echo("value='".$info["date_start"]."'"); } ?>>
			
	<label for="dateStop">Date et heure de cloture</label>
	<input type="datetime-local" name="dateStop" id="dateStop" required <?php if(isset($info)) { echo("value='".$info["date_stop"]."'"); } ?>>
			
	<label for="lieu">Lieu</label>
	<input type="text" name="lieu" id="lieu" required <?php if(isset($info)) { echo("value='".$info["lieu"]."'"); } ?>>
			
	<label for="prix">Prix</label>
	<input type="number" name="prix" id="prix" required <?php if(isset($info)) { echo("value='".$info["prix"]."'"); } ?>>
			
	<label for="description">Description</label>
	<input type="text" name="description" id="description" required <?php if(isset($info)) { echo("value='".$info["description"]."'"); } ?>>
			
	<label for="artistes">Artistes</label>
	<input type="text" name="artistes" id="artistes" placeholder="Séparés par une virgule (sans espace)" required <?php if(isset($info)) { echo("value='".$listArtiste."'"); } ?>>
			
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
						<input type="checkbox" name="styles[]" id="<?php echo($name); ?>" value="<?php echo($name); ?>" <?php if(isset($info) && in_array($name, $listStyles)) { echo("checked"); } ?>>
					</div>
					
				<?php
			}
		?>
	</div>
				
	<label for="lien">Lien du site</label>
	<input type="url" name="lien" id="lien" required <?php if(isset($info)) { echo("value='".$info["lien"]."'"); } ?>>
				
	<input class="button" type="submit" value="Valider">
</form>