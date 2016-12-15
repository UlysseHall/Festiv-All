<?php
session_start();
include_once("connect.php");
$listLieu = $bdd->query("SELECT lieu FROM festival group by lieu");
$listStyle = $bdd->query("SELECT id, nom FROM style");
?>
<div class="searchform">
	<form action="festivalSearch.php" method="POST">
		
			<select name="lieu" id="lieu">
				<option value="">Lieu</option>
				<?php
					foreach($listLieu as $lieu)
					{
						$place = $lieu["lieu"];
						?>
						<option <?php if(isset($_SESSION["searchLieu"]) && $_SESSION["searchLieu"] == $place) { echo("selected"); } ?>
						 value="<?php echo($place); ?>"><?php echo(ucfirst($place)); ?></option>
						<?php
					}
				?>
			</select>
		
		
		
			<select name="style" id="style">
				<option value="">Genre</option>
				<?php
					foreach($listStyle as $style)
					{
						$genre = $style["nom"];
						$genreId = $style["id"];
						?>
						<option <?php if(isset($_SESSION["searchStyle"]) && $_SESSION["searchStyle"] == $genreId) { echo("selected"); } ?>
						 value="<?php echo($genreId); ?>"><?php echo(ucfirst($genre)); ?></option>
						<?php
					}
				?>
			</select>
		
		
		
			<select name="mois" id="mois">
				<option value="">Période</option>
				<option value="1" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 1) { echo("selected"); } ?>>Janvier</option>
				<option value="2" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 2) { echo("selected"); } ?>>Février</option>
				<option value="3" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 3) { echo("selected"); } ?>>Mars</option>
				<option value="4" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 4) { echo("selected"); } ?>>Avril</option>
				<option value="5" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 5) { echo("selected"); } ?>>Mai</option>
				<option value="6" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 6) { echo("selected"); } ?>>Juin</option>
				<option value="7" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 7) { echo("selected"); } ?>>Juillet</option>
				<option value="8" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 8) { echo("selected"); } ?>>Août</option>
				<option value="9" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 9) { echo("selected"); } ?>>Septembre</option>
				<option value="10" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 10) { echo("selected"); } ?>>Octobre</option>
				<option value="11" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 11) { echo("selected"); } ?>>Novembre</option>
				<option value="12" <?php if(isset($_SESSION["searchMois"]) && $_SESSION["searchMois"] == 12) { echo("selected"); } ?>>Décembre</option>
			</select>
		
		
		<input type="submit" value="GO">
	</form>
</div>